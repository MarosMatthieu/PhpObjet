<?php
class IndividuDAO {
	
	//CRUD de INDIVIDU + LIST individu
	
	private $bdd;
	function __construct($bdd) {
		$this->bdd = $bdd;
	}
	public function get1($id) {
		$id = ( int ) $id;
		
		$q = $this->_db->query ( 'SELECT id, nom, prenom, age ,shortDesc FROM INDIVIDU WHERE id = ' . $id );
		$donnees = $q->fetch ( PDO::FETCH_ASSOC );
		
		return new News ( $donnees ['id'], $donnees ['titre'], $donnees ['date'], $donnees ['texte_nouvelle'] );
	}
	public function getList() {
		$lstIndiv = [ ];
		
		$q = $this->_db->query ( 'SELECT id, titre, date, texte_nouvelle FROM news ORDER BY id ASC' );
		
		while ( $donnees = $q->fetch ( PDO::FETCH_ASSOC ) ) {
			$lstIndiv [] = new News ( $donnees ['id'], $donnees ['titre'], $donnees ['date'], $donnees ['texte_nouvelle'] );
		}
		
		return $lstIndiv;
	}
}

?>