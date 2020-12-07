<?php

require_once './Vehicle.php';

class Truck extends Vehicle
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
     * @var int
     */
    private $stockCapacity;

    /**
     * @var int
     */
    private $stockStatus = 0;

    // Methods 

    public function __construct(string $color, int $nbSeats, string $energy, int $stockCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->stockCapacity = $stockCapacity;
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
    public function setEnergy(string $energy) : Truck
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
     * @return int
     */
    public function getStockCapacity():int
    {
        return $this->stockCapacity;
    }

    /**
     * @param int /$stockCapacity
     * @return void
     */
    public function setStockCapacity(int $stockCapacity):void
    {
        $this->stockCapacity = $stockCapacity;
    }

    /**
     * @return string
     */
    public function getStockStatus():string
    {
        if (($this->stockStatus) < ($this->stockCapacity)) {
            return 'in filling';
        } else {
            return 'full';
        }
    }

    /**
     * @param int
     * @return void
     */
    public function setStockStatus(int $stockStatus):void
    {
        $this->stockStatus = $stockStatus;
    }

    /**
     * @return string
     */
    public function start()
    {
        return "Truck started.";
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