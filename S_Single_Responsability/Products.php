<?php

namespace App;

require_once 'index.php';

class Products
{
    protected $products = [];

    public function add($product = [])

    {
        $this->products = $product;
    }
    public function get()

    {
        return $this->products;
    }
    public function remove($id)

    {
        // Code here...
    }
    public function addToCart($id, $quantity)

    {
        // Code here...
    }
    public function getTotal()

    {
        // Code here...
    }
    
}

