<?php

class Car{
    protected $name;
    function __construct($carName){
        $this->name = $carName;
    }   

    protected function drive(){
        echo "$this->name is driving \n";
    }
}

// inheritance 

class Truck extends Car{
    private $wheels;
    function __construct($carName, $carWheels){
        $this->name = $carName;
        $this->wheels = $carWheels;
    }

    public function startDriving(){
        $this->drive();
    }

    function wheels(){
        echo "$this->name has $this->wheels wheels \n";
    }
}

$inherObj = new Truck("Big Truck", 16);
$inherObj->startDriving();
$inherObj->wheels();

?>

