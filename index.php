<?php

include_once "clases/aprendiz.php";
include_once "clases/instructor.php";

$jhodan = new Aprendiz();
$jesus  = new Aprendiz();
$john   = new Instructor();

// no se puede instancia una clase abstrata
// $persona = new Persona();

//Llenamos los datos de Jhodan
$jhodan->setNombre("Jhodna");
$jhodan->setApellido("Corredor");
$jhodan->setEdad(21);
$jhodan->setSalario("580.000");
$jhodan->setValor(25.000);
//Llenamos los datos de Jesus
$jesus->setNombre("Jesus");
$jesus->setApellido("Jaimes");
$jesus->setEdad(19);
$jesus->setSalario("580.000");
$jesus->setValor(35.000);

//Llenamos los datos de John
$john->setNombre("John");
$john->setApellido("becerra");
$john->setEdad(42);
$john->setSalario("7.500.000");
$john->setValor(123.300);

echo "<p>" . $jhodan->getFullName() . "</p>";
echo "<p>" . $jesus->getFullName() . "</p>";
echo "<p>" . $john->getFullName() . "</p>";
