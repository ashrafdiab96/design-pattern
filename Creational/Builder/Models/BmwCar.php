<?php

namespace Creational\Builder;

class BmwCar extends Car
{
    private $data = [];

    public function setPart($name, $value)
    {
        $this->data[$name] = $value;
    }
}
