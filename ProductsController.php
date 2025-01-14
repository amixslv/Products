<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = [
            ['name' => 'Product 1', 'description' => 'Description 1', 'price' => 20.20],
            ['name' => 'Product 2', 'description' => 'Description 2', 'price' => 30.10],
            ['name' => 'Product 3', 'description' => 'Description 3', 'price' => 40.00],
            //Šeit pievieno produktus.
        ];

        return view('products', compact('products'));
    }
}
