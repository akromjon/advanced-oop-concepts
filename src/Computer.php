<?php

namespace Akromjon\AdvancedOopConcepts;

class Computer extends Device implements Product
{
    public function price(): float
    {
        $this->price=$this->count*2000;
        return $this->price;
    }
}