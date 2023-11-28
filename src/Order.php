<?php

namespace Akromjon\AdvancedOopConcepts;

class Order
{
    protected Product $product;

    public function __construct(Product $product)
    {
        $this->product=$product;
    }

    public function order(int $count):ProductNotLeftException|bool
    {
        if($this->product->count()<$count){
            throw new ProductNotLeftException;
        }     
        
        return true;
    }

}