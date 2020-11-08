<?php
require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new bicycle();
var_dump($bike);

$rockrider = new bicycle('red', 1);
$bike->seCcolor = "red";
$bike->etCurrentSpeed = 1;
var_dump($bike); // then, another dump.

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed . ' km/h' . '<br>';
echo $bike->brake();

// Instanciation d'un nouvel objet $rockrider

$tornado = new bicycle('blue', 1);
// Instanciation d'un nouvel objet $tornado
$tornado->Setcolor = 'black';
$bike->SetcurrentSpeed = 2;

$tornado->forward();

var_dump($bike);
$bike->dump();
$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();



$car = new car();
var_dump($car);

echo $car->forward();
