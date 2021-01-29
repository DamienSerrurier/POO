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

    public function __construct($pv, $fury, $weaponType, $weaponDamageType, $shieldType, $shieldValueType)
    {
        parent::__construct($pv, $fury);
        $this->setWeapon($weaponType);
        $this->setweaponDamage($weaponDamageType);
        $this->setshield($shieldType);
        $this->setshieldValue($shieldValueType);
    }

    public function attacked($orcDamage)
    {
        $calcDammage = $orcDamage - $this->getshieldValue();
        parent::setHealth(parent::getHealth() - $calcDammage);
        $this->addRageValue();
    }

    public function addRageValue()
    {
        parent::setRage(parent::getRage() + 30);
    }
}
