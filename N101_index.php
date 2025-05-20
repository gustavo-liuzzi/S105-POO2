<?php

include "N101_Animal.php";
include "N101_Perro.php";
include "N101_Gato.php";

/* Prueba de clases y método makeSound()*/

$gatoUno = new Gato("Pedro");
$perroUno = new Perro("Jacinto");
$gatoUno->makeSound();
echo "<br>";
$perroUno->makeSound();
