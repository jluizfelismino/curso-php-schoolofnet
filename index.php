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

Comentários
echo $ferrari->getEngine(); retorna 488 horsepouwer na tela
echo $ferrari->color; //Usando parametros da  função construida retorna tela (vazia)
echo $ferrari->color; //retorna (Red) com $ferrari->color = "Red"; idem $mustang e $m
