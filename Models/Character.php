<?php

class Character
{
    // Propriétés
    private $health;
    private $rage;

    // Méthodes
    public function setHealth($healthValue)
    {
        $this->health = $healthValue;
        return $this->health;
    }

    public function getHealth()
    {
        return $this->health;
    }

    public function setrage($rageValue)
    {
        $this->rage = $rageValue;
        return $this->rage;
    }

    public function getRage()
    {
        return $this->rage;
    }

    public function __construct()
    {
        $this->setHealth(300);
        $this->setRage(0);
    }
}
