<?php

class Hero extends Character
{
    //Propriétés
    private $weapon;
    private $weaponDamage;
    private $shield;
    private $shieldValue;

    //Méthodes
    public function setWeapon($weaponType)
    {
        $this->weapon = $weaponType;
        return $this->weapon;
    }

    public function getWeapon()
    {
        return $this->weapon;
    }

    public function setweaponDamage($weaponDamageType)
    {
        $this->weaponDamage = $weaponDamageType;
        return $this->weaponDamage;
    }

    public function getweaponDamage()
    {
        return $this->weaponDamage;
    }

    public function setshield($shieldType)
    {
        $this->shield = $shieldType;
        return $this->shield;
    }

    public function getshield()
    {
        return $this->shield;
    }

    public function setshieldValue($shieldValueType)
    {
        $this->shieldValue = $shieldValueType;
        return $this->shieldValue;
    }

    public function getshieldValue()
    {
        return $this->shieldValue;
    }

    public function setAttacked($setAttacked)
    {
        $this->attacked = $setAttacked;
        return $this->attacked;
    }

    public function getAttacked()
    {
        return $this->attacked;
    }

    public function __construct()
    {
        $character = new Character();
        parent::__construct();
        $this->setWeapon('Excalibur');
        $this->setweaponDamage(20);
        $this->setshield('Bouclier hylien');
        $this->setshieldValue(10);
        echo 'Le héro à ' . $character->getHealth() . ' points de vie et ' . $character->getRage() . ' points de rage. Il est équipé égualement d\'une épée ' . $this->weapon . ' qui fait ' . $this->weaponDamage . ' de domage et d\'un ' . $this->shield . ' qui a une classe d\'armure de ' . $this->shieldValue . '.';
    }

    public function attacked()
    {
        $calDammage = 20 - $this->getshieldValue();
        parent::setHealth(parent::getHealth() - $calDammage);
    }

    public function addRageValue()
    {
        for ($rage = 0; $rage < 30; $rage++) {
            $rage = parent::setrage(parent::getRage() + 10);
        }
    }
}
