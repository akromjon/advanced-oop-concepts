<?php

use Akromjon\AdvancedOopConcepts\Order;
use PHPUnit\Framework\TestCase;
class OrderTest extends TestCase{

    //q: how to test Exception in phpunit?

    public function testException()
    {
       $this->expectException(\Akromjon\AdvancedOopConcepts\ProductNotLeftException::class);
       $order=new Order(new \Akromjon\AdvancedOopConcepts\Computer('MacOS',100,10));
       $order->order(11);
    }

    public function testOrder()
    {
        $order=new Order(new \Akromjon\AdvancedOopConcepts\Computer('MacOS',100,10));
        $this->assertTrue($order->order(5));
    }
}