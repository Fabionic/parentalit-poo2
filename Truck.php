<?php


require_once 'Vehicle.php';


class Truck extends Vehicle

{
    private int $storageCapacity;

    private int $loading;

    public function __construct(int $storageCapacity, string $color, int $nbSeats, string $energy)

    {
        
        parent::__construct($color, $nbSeats);

        $this->storageCapacity = $storageCapacity;
        $this->energy = $energy;

    }

    public function getLoading(): int

    {

        return $this->loading;

    }


    public function setLoading(int $loading): void

    {

        $this->loading = $loading;

   
}
