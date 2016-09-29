<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Product;

class ProductController extends Controller
{
	/**
 	 * Renders Home Page
     */
    public function getIndex() 
    {
    	$products = Product::all();
    	return view('product.index', ['productsValues' => $products]);
    }
}
