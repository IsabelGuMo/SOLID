<?php

namespace App;

require_once 'index.php';
require_once 'Products.php';

class Menu 
{
    /* public $nombre;
    public $precio;
    public $id;

    function __construct($nombre, $precio, $id) {
    $this->nombre = $nombre;
    $this->precio = $precio;
    $this->id = $id;
  } */
    public function view($products)

    {
        $menu = ''; 

        $menu .= "ID\tNombre\t\tPrecio\n";
        $menu .= str_repeat('=', 30) . "\n"; 

        foreach ($products as $product) {
            $menu .=$product['id'] . "\t"
                . str_pad($product['name'], 15, ' ') . "\t"
                .$product['price'] . "\n";
        }

        return $menu;
    }
}

