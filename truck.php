<?php
require_once 'Vehicle.php';

class truck extends Vehicle
{


    public function __construct(string $color, int $nbSeats, string $energy, integer $stockCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->stockCapacity = $stockCapacity;
    }

    /**
     * @return string
     */
    public function truckLoad() : string
    {
        if $this->truckLoad = 500;
            return = 'full';
        else
            return = 'in filling';
    }
}