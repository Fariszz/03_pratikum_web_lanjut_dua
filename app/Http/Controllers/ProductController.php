<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function product1(){
        return view('product.product1');
    }

    public function product2(){
        return view('product.product2');
    }
}
