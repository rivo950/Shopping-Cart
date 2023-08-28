<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(10);
        return view('shop.index',compact('products'));
    }

    public function show($id)
    {
        $product = Product::FindOrFail($id);
        return view('shop.show',compact('product'));
    }
}
