<?php

namespace Tests;

use Creational\Builder\BenzCar;
use Creational\Builder\BenzCarBuilder;
use Creational\Builder\BmwCar;
use Creational\Builder\BmwCarBuilder;
use Creational\Builder\CarProducer;

class BuilderTest
{
    public function testProduceBmwCar()
    {
        $bmwCar = new BmwCarBuilder();
        $carProducer = new CarProducer($bmwCar);
        $myCar = $carProducer->produceCar();
        $this->assertInstanceOf(BmwCar::class, $myCar);
    }

    public function testProduceBenzCar()
    {
        $benzCar = new BenzCarBuilder();
        $carProducer = new CarProducer($benzCar);
        $myCar = $carProducer->produceCar();
        $this->assertInstanceOf(BenzCar::class, $myCar);
    }
}
