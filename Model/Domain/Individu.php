<?php

/***
 * Class Individu
 * @author 15marosm
 */
class Individu {
	
	/***
	 * Propriété de la class Individu
	 */
	private $id;
	private $indivNom;
	private $indivPrenom;
	private $indivAge;
	private $indivShortDesc;
	
	
	/**
	 * Get & Set 
	 */
	public function getId()
	{
		return $this->indivNom;
	}
	public function setId($indivNom)
	{
		$this->indivNom = $indivNom ;
	}
	
	public function getIndivNom() 
	{
		return $this->indivNom;
	}
	public function setIndivNom($indivNom)
	{
		$this->indivNom = $indivNom ;
	}
	
	public function getIndivPrenom()
	{
		return $this->indivPrenom;
	}
	public function setIndivPrenom($indivPrenom)
	{
		$this->indivPrenom = $indivPrenom ;
	}
	
	public function getIndivAge()
	{
		return $this->indivAge;
	}
	public function setIndivAge($indivAge)
	{
		$this->indivAge = $indivAge ;
	
	}
	
	public function getIndivShortDesc()
	{
		return $this->indivShortDesc;
	}
	public function setIndivShortDesc($indivShortDesc)
	{
		$this->indivShortDesc = $indivShortDesc ;
	
	}


	/***
	 * Constructeur de la class Individu
	 * @param unknown $id
	 * @param unknown $indivNom
	 * @param unknown $indivPrenom
	 * @param unknown $indivAge
	 * @param unknown $indivShortDesc
	 */
	function __construct($id, $indivNom, $indivPrenom, $indivAge, $indivShortDesc )
	{
		$this->id = $id;
		$this->Nom = $indivNom;
		$this->Prenom = $indivPrenom;
		$this->Age = $indivAge;
		$this->Shortdesc = $indivShortDesc;
	}
	
	


}



