<?php


namespace Akromjon\AdvancedOopConcepts;

use Akromjon\AdvancedOopConcepts\Product;
use Akromjon\AdvancedOopConcepts\Device;
class Phone extends Device implements Product
{
    public function price(): float
    {
        $this->price=$this->count*1000;
        return $this->price;
    }
}