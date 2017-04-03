<?php
class IndividuDAO {
	
	private $bdd;
	
	
	//CRUD de INDIVIDU + LIST individu
	
	
	function __construct($bdd) {
		$this->bdd = $bdd;
	}
	
	public function getSingleIndiv($id) {
		$id = ( int ) $id;
		
		$q = $this->_db->query ( 'SELECT id, nom, prenom, age ,shortDesc FROM INDIVIDU WHERE id = ' . $id );
		$donnees = $q->fetch ( PDO::FETCH_ASSOC );
		
		return new News ( $donnees ['id'], $donnees ['nom'], $donnees ['prenom'], $donnees ['age'], $donnees ['shortDesc'] );
	}
		
	public function getListIndiv() {
		$lstIndiv = [ ];
		
		$q = $this->_db->query ( 'SELECT id, nom, prenom, age ,shortDesc FROM INDIVIDU WHERE id ASC' );
		
		while ( $donnees = $q->fetch ( PDO::FETCH_ASSOC ) ) {
			$lstIndiv [] = new News ( $donnees ['id'], $donnees ['nom'], $donnees ['prenom'], $donnees ['age'], $donnees ['shortDesc'] );
		}
		
		return $lstIndiv;
	}

	public function addIndiv($id) {
//		$id = ( int ) $id;
//	
//		$q = $this->_db->query ( 'SELECT id, nom, prenom, age ,shortDesc FROM INDIVIDU WHERE id = ' . $id );
//		$donnees = $q->fetch ( PDO::FETCH_ASSOC );
	
//		return new News ( $donnees ['id'], $donnees ['nom'], $donnees ['prenom'], $donnees ['age'], $donnees ['shortDesc'] );
	}

	public function DelIndiv($id) {
//		$id = ( int ) $id;
	
//		$q = $this->_db->query ( 'SELECT id, nom, prenom, age ,shortDesc FROM INDIVIDU WHERE id = ' . $id );
//		$donnees = $q->fetch ( PDO::FETCH_ASSOC );
	
//		return new News ( $donnees ['id'], $donnees ['nom'], $donnees ['prenom'], $donnees ['age'], $donnees ['shortDesc'] );
	}

}



?>