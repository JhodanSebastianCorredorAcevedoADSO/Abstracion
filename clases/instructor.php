<?php

include_once("persona.php");

class Instructor extends Persona
{

  private $salario;

  private $valor;

  public function __construct()
  {
  }

  public function getSalario()
  {
    return $this->salario;
  }

  public function getValor()
  {
    return $this->valor;
  }

  public function setSalario($salario)
  {
    $this->salario = $salario;
  }

  public function setValor($valor)
  {
    $this->valor = $valor;
  }
  public function getFullName()
  {
    return $this->nombre . " " . $this->apellido;
  }
}
