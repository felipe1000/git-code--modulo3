<?php

class Pessoa{

	public $nome;
	public $idade;

	public function __construct($nome,$idade){

		$this->nome=$nome;
		$this->idade=$idade;
	
	}

	public function Correr($km){

		echo $this->nome. " Está correndo ";
		for ($i=0; $km>$i; $i++){

			echo ".";
		}
		echo $this->nome. " Terminou de correu";
	}


}

?>