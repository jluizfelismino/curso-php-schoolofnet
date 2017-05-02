<?php

require_once("Car.php");
require_once("Motorcycle.php");

$ferrari = new Car("Ferrari","Red");
//$ferrari->brand = "Ferrari";
//$ferrari->color = "Red";
$ferrari->engine = 488;
$ferrari->doors = 2;

$mustang = new Car("Mustang","Yellow");
//$mustang->brand = "Mustang";
//$mustang->color = "Yellow";
$mustang->engine = 300;
$mustang->doors = 4;

$m = new Motorcycle;
$m->brand = "Honda";
$m->color = "Blue";
$m->engine = 150;

echo $ferrari->getEngine();