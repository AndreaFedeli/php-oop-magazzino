<?php
require_once 'classes/magazzino.php';

$Tv2 = new Tv('Lg','70','800');
$Tv2->setPosition('265L');
var_dump($Tv2);

$Tv3 = new Tv('Sony','35','600');
$Tv3->setPosition('201G');
var_dump($Tv3);

 ?>
