<?php

namespace Akromjon\AdvancedOopConcepts;
use Exception;
class ProductNotLeftException extends Exception
{    protected $message = 'Product not left';
}