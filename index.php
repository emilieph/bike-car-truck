<?php

require_once 'bcycle.php';
$bike = new bicycle();
var_dump($bike);

$rockrider = new bicycle('red', 1);
$bike->Setcolor = "red";
$bike->SetcurrentSpeed = 1;
var_dump($bike); // then, another dump.

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->GetcurrentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->GetcurrentSpeed . ' km/h' . '<br>';
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
var_dump($bicycle);

require_once'cars.php';
$car = new car();
var_dump($car);

echo $car->forward():
