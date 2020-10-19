<?php

require_once 'bcycle.php';
$bike = new bicycle();
var_dump($bike);

$bike->color = "blue";
$bike->currentSpeed = 0;
var_dump($bike); // then, another dump.

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();

// Instanciation d'un nouvel objet $rockrider

$rockrider = new bicycle();
$rockrider->color = 'yellow';

// Instanciation d'un nouvel objet $tornado
$tornado = new bicycle();
$tornado->color = 'black';

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