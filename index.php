<?php
require 'Models/Character.php';
require 'Models/Hero.php';
require 'Models/Orc.php';

$hero = new Hero(2000, 0, 'Epée Excalibur', 250, 'Bouclier Hylien', 600);
echo 'Le héro à ' . $hero->getHealth() . ' points de vie et ' . $hero->getRage() . ' points de rage. Il est équipé égualement d\'une épée ' . $hero->getWeapon() . ' qui fait ' . $hero->getweaponDamage() . ' de dégâts et d\'un ' . $hero->getshield() . ' qui a une classe d\'armure de ' . $hero->getshieldValue() . '.';
var_dump($hero);

$orc = new Orc(500, 0);
echo 'Je suis le méchant Orc et je possède ' . $orc->getHealth() . ' points de vies et ' . $orc->getRage() . ' points de rages.';
var_dump($orc);

while ($hero->getHealth() > 0 && $orc->getHealth() > 0) {
    $orc->attack();
    $hero->attacked($orc->getDamage());
    if ($hero->getRage() >= 100) {
        $orc->setHealth($orc->getHealth() - $hero->getweaponDamage());
        echo '<p style ="color:red">J\'en ai marre</p>';
        $hero->setRage(0);
        echo '<p>La vie de l\'Orc est tombé à ' . $orc->getHealth() . '</p>';
    }
    if ($hero->getHealth() <= 0) {
        echo 'GAME OVER';
    } else {
        echo 'L\'Orc a occasionné ' . $orc->getDamage() . ' points de dégâts au Héro. Le bouclier du légendaire Héro a arrêté ' . $hero->getshieldValue() . ' points de dégâts, mais a laissé passer ' . ($orc->getDamage() - $hero->getshieldValue()) . ' Points de dégât. Maintenant la vie du héro est de ' . $hero->getHealth() . ' points et sa rage est de ' . $hero->getRage() . ' points. Son équipement n\'a pas changé .';
        var_dump($orc);
        var_dump($hero);
    }

    if ($orc->getHealth() <= 0) {
        echo 'YOU WIN';
    }
}
