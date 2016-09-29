<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProductController extends Controller
{
	/**
 	 * Renders Home Page
     */
    public function getIndex() 
    {
    	return view('product.index');
    }
}
