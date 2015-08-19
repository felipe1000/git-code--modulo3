<?php
require_once "pessoa.php";

$pessoa1= new Pessoa("Felipe",32);

$pessoa2 = new Pessoa("Luciana",39);

echo $pessoa1->Correr(100);

require_once "produto.php";
require_once "TenisAdidas.php";

$produto1 = new TenisAdidas();
$produto1->getCor();

$tenis2 = new SapaTenis();
$tenis2->getCor();
$teni2->getTamanho();
 ?>