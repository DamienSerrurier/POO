<?php
require 'Models/Character.php';
require 'Models/Hero.php';

$character = new Character();
$hero = new Hero();
var_dump($character);
var_dump($hero);

$hero->attacked();
var_dump($hero);

$hero->addRageValue();
var_dump($hero);
