<?php

namespace Tests;

use Creational\AbstractFactory\BenzCar;
use Creational\AbstractFactory\BMWCar;
use Creational\AbstractFactory\CarAbstractFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    private $carFactory;

    public function testCanCreateBMWCar()
    {
        $this->carFactory = new CarAbstractFactory(200000);
        $bmwCar = $this->carFactory->createBMWCar();
        $this->assertInstanceOf(BMWCar::class, $bmwCar);
    }

    public function testCanCreateBenzCar()
    {
        $this->carFactory = new CarAbstractFactory(200000);
        $benzCar = $this->carFactory->createBenzCar();
        $this->assertInstanceOf(BenzCar::class, $benzCar);
    }
}
