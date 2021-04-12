<?php

class Car
{
    /* -------------------- 
        PROPRIÉTÉS
    -------------------- */
    private int  $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel;


    /* -------------------- 
        CONSTRUCTEUR
    -------------------- */
    public function __construct (string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    
    /* -------------------- 
        METHODES
    -------------------- */
    public function forward()
    {
        $this->currentSpeed = "15";

        return "vroom !";
    }

    public function brake()
    {
        $up = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $up .= "Brake !!!";
        }
        $up .= "I'm stopped !";
        return $up;
    }

    public function start()
    {
        {
            return "vroom !";
        }

    }


    /* -------------------- 
        GET/SET
    -------------------- */

    // nbWheels
    public function getNbWheels()
    {
        return $this->nbWheels;
    }

    // currentSPeed 
    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed($currentSpeed)
    {
        $this->currentSpeed = $currentSpeed;
    }

    // color 
    public function getColor() : string
    {
        return $this->color;
    }

    // nbSeats 
    public function getNbSeats()
    {
        return $this->nbSeats;
    }

    // energy
    public function getEnergy()
    {
        return $this->energy;
    }

    // energyLevel
    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel($energyLevel)
    {
        $this->energyLevel = $energyLevel;
    }
}