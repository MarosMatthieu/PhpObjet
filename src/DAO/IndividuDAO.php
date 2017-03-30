<?php
class IndividuDAO {
	
	//CRUD de INDIVIDU + LIST individu
	
	private $bdd;
	function __construct($bdd) {
		$this->bdd = $bdd;
	}
	public function get1($id) {
		$id = ( int ) $id;
		
		$q = $this->_db->query ( 'SELECT id, titre, date, texte_nouvelle FROM news WHERE id = ' . $id );
		$donnees = $q->fetch ( PDO::FETCH_ASSOC );
		
		return new News ( $donnees ['id'], $donnees ['titre'], $donnees ['date'], $donnees ['texte_nouvelle'] );
	}
	public function getList() {
		$lstNews = [ ];
		
		$q = $this->_db->query ( 'SELECT id, titre, date, texte_nouvelle FROM news ORDER BY date DESC' );
		
		while ( $donnees = $q->fetch ( PDO::FETCH_ASSOC ) ) {
			$lstNews [] = new News ( $donnees ['id'], $donnees ['titre'], $donnees ['date'], $donnees ['texte_nouvelle'] );
		}
		
		return $lstNews;
	}
}

?>