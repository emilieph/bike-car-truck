<?php
require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new bicycle();
var_dump($bike);

$rockrider = new bicycle('red', 1);
$bike->setCcolor = "red";
$bike->setCurrentSpeed = 0;
var_dump($bike); // then, another dump.

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed . ' km/h' . '<br>';
echo $bike->brake();

// Instanciation d'un nouvel objet $rockrider

$rockrider = new Bicycle('blue', 1);
$rockrider->setColor('yellow');

// Instanciation d'un nouvel objet $tornado

$tornado = new Bicycle('blue', 1);
$tornado->setColor('black');


$tornado->forward();

var_dump($bike);

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

require_once 'Car.php';
$car = new Car('blue', 1, 'fuel');
var_dump($car);
echo $car->forward();
