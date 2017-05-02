<?php

class Car
{
//atributos
	public $brand;
	public $color;
	public $engine;

//metodo é uma função de uma classe
	public function getEngine($type = "horsepower")
	{
		return "{$this->engine} {$type}";
	}
}

//Assinaturas - Cada método tem a sua assinatura
