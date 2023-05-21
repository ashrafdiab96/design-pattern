<?php

namespace Creational\Builder;

use Creational\Builder\Models\BmwCar;
use Creational\Builder\Models\Car;

class BmwCarBuilder implements CarBuilderInterface
{
    /**
     * @var Car $type
     */
    private $type;

    public function createCar()
    {
        $this->type = new BmwCar;
    }

    public function addBody()
    {
        $this->type->setPart('Body', 'metal');
    }

    public function addDoors()
    {
        $this->type->setPart('Doors', 'Iron');
    }

    public function addEngine()
    {
        $this->type->setPart('Enginr', '4 Cylinder');
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
