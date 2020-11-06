<?php

$nome = "Anderson";

function teste(){
	global $nome;
	echo $nome;
}

function teste2(){

}

teste();

?>