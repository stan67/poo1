<?php

class Bicycle
{
    /* -------------------- 
        PROPRIÉTÉS
    -------------------- */
    private string $color;
    private int $currentSpeed;
    private int $nbSeats = 1;
    private int $nbWheels = 2;


    /* -------------------- 
        CONSTRUCTEUR
    -------------------- */
    public function __construct(string $color, int $currentSpeed)
    {
        $this->color = $color;
        $this->currentSpeed = $currentSpeed;
    }


    /* -------------------- 
        METHODES
    -------------------- */
    public function forward(): string
    {
        $this->currentSpeed = "15";

        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function dump()
    {
        var_dump($this);
    }

      
    
    /* -------------------- 
        GET/SET
    -------------------- */


    // Color
    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    // currentSpeed 
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }
}
