<?php
require_once 'Vehicle.php';

class Truck extends Vehicle
{

    /**
    * @var string
    */
    protected $energy;

    /**
    * @var integer
    */
    protected $stockCapacity;

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
