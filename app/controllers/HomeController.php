<?php

namespace app\controllers;

use app\database\models\Product;
use app\database\models\User;
use app\library\Cart;
use app\library\CartInfo;
use app\library\View;

class HomeController
{
    public function index()
    {
        $products = Product::all('id, name, slug, price, image, description');

        View::render('home', ['products' => $products]);
    }

}
