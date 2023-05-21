<?php

namespace Creational\Builder;

use Creational\Builder\Models\BenzCar;
use Creational\Builder\Models\Car;

class BenzCarBuilder implements CarBuilderInterface
{
    /**
     * @var Car $type
     */
    private $type;

    public function createCar()
    {
        $this->type = new BenzCar();
    }

    public function addBody()
    {
        $this->type->setPart('Body', 'metal');
    }

    public function addDoors()
    {
        $this->type->setPart('Doors', 'iron');
    }

    public function addEngine()
    {
        $this->type->setPart('Engine', '6 Cylinder');
    }

    public function addWheel()
    {
        $this->type->setPart('Wheel', 'rubber');
    }

    public function getCar(): Car
    {
        return $this->type;
    }
}
