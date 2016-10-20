<?php
/**

 */
class ia
{

  // Declaración de una propiedad
  public $fila = '3';
  public $columna = '1';

  // Declaración de un método
  public function getfila() {
      return $this->fila;
  }
  public function getcolumna() {
      return $this->columna;
  }
  // Setters
  public function setFila($fil) {
    if ($fil>3){
      $this->fila=3;
    }elseif ($fil<0){
  $this->fila=0;
  }else{
    $this->fila = $fil;
  }
}
  public function setColumna($col) {
    if ($col>3){
      $this->columna=3;
    }elseif ($col<0) {
  $this->columna=0;
  }else{
    $this->columna = $col;
  }
}
  // Random
  public function RandomPos() {
    $this->fila=rand(0,3);
    $this->columna=rand(0,3);
  }
}
?>
