<?php

require_once './Vehicle.php';
require_once "./LightableInterface.php";

class Car extends Vehicle implements LightableInterface
{
    //Constante

    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    // Attributs


    /**
     * @var string;
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    /**
     * @var bool
     */
    private $hasParkBrake;

    // Methods 

    public function __construct(string $color, int $nbSeats, string $energy, bool $hasParkBrake)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->setParkBrake($hasParkBrake);
    }

    /**
     * @return string
     */
    public function getEnergy() : string
    {
        return $this->energy;
    }

    /**
     * @param string $energy
     */
    public function setEnergy(string $energy) : Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    /**
     * @return int
     *
     */
    public function getEnergyLevel() : int
    {
        return $this->energyLevel;
    }

    /**
     * @param int /$energyLevel
     * @return void
     */
    public function setEnergyLevel(int $energyLevel): void
    {
        if($energyLevel >= 0){
            $this->energyLevel = $energyLevel;
        }
    }

    /**
     * @return string
     */
    public function start()
    {
        if($this->hasParkBrake === true){
            throw new Exception("Attention: Park brake is on.");
        }
        return "Car started.";
    }

    /**
     * @param bool
     */
    public function setParkBrake(bool $parkBrake): Car
    {
        $this->hasParkBrake = $parkBrake;
        return $this;
    }

    public function switchOn(): bool
    {
        return true;
    }

    public function switchOff():bool
    {
        return false;
    }
}