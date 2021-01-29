<?php

class Orc extends Character
{
    //Propriétés
    private $damage;

    //Méthodes
    public function setDamage($setDamageValue)
    {
        $this->damage = $setDamageValue;
        return $this->damage;
    }

    public function getDamage()
    {
        return  $this->damage;
    }

    public function __construct($pv, $fury)
    {
        parent::__construct($pv, $fury);
    }

    public function attack()
    {
        return $this->setDamage(rand(600, 800));
    }
}
