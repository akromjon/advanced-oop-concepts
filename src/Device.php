<?php

namespace Akromjon\AdvancedOopConcepts;

abstract class Device{
    protected string $name;
    protected float $price;
    protected int $count=0;

    public function __construct(string $name, float $price, int $count)
    {
        $this->name=$name;
        $this->price=$price;
        $this->count=$count;
    }

    public function count():int{
        return $this->count;
    }   

    abstract public function price():float;
    
}