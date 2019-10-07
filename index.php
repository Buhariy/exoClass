<?php
require_once "vehicule.php";
require_once "voiture.php";
require_once "moto.php";
require_once "camion.php";


$audi= new voiture();
$audi->setPassager(1);
echo $audi->getPassager();
$audi->monter(3);
echo $audi->getPassager();
$audi->voyage();
$audi->setKm(10);
echo $audi->getKm();
$audi->avance(50);
echo $audi->getKm();
echo '<br/>';

$mitsu=new moto();
$mitsu->setPassager(2);
$mitsu->setKm(0);
echo $mitsu->getPassager();
$mitsu->avance(100);
$mitsu->descendre(1);
echo $mitsu->getKm();
echo $mitsu->getPassager();