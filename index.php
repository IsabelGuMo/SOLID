<?php include_once 'vendor/autoload.php';
require_once 'S_Single_Responsability/Products.php';
require_once 'S_Single_Responsability/Menu.php';
require_once 'S_Single_Responsability/Cart.php';


use App\Menu;
use App\Cart;
use App\Products;

$products= [
    ['id'=> 1, 'name'=> 'Negro', 'price' => 2],
    ['id'=> 2, 'name'=> 'Con Leche', 'price' => 2.5],
    ['id'=> 3,'name'=> 'Capuccino', 'price' => 3],
];

$menu = new Menu();
$productsInstance = new Products();

$productsInstance->add($products);

echo $menu->view($productsInstance->get());