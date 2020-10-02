<?php
class Tv{
public $marca;
public $pollici;
public $anno;
public $prezzo;
public $scaffale;


public function __construct($_marca,$_pollici,$_prezzo){
  $this->marca= $_marca;
  $this->pollici= $_pollici;
  $this->prezzo = $_prezzo;
}

public function setPosition($_scaffale){
  $this->scaffale = $_scaffale;
}
}
$Tv1 = new Tv ('Samsung','55','500');
$Tv1->setPosition('159A');
var_dump($Tv1);
 ?>
