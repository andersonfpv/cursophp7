<?php

class Pessoa {

	public $nome; //Atributo

	public function falar(){ //Método

		return "O meu nome é ".$this->nome;
	}
}

$anderson = new Pessoa();
$anderson->nome = "Anderson Felipe";
echo $anderson->falar();

?>