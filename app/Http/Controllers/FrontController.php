<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class FrontController extends Controller
{
    public function home()
    {
        $lapcartProducts = Product::all()->take(8);
    	return view('front.home')->with('products',$lapcartProducts);
    }

    public function product($productid)
    {
        $product = Product::find($productid);
        if(empty($product))
            return redirect('/');
    	return view('front.product')->with('product',$product);
    }

    public function contact()
    {
    	return view('front.contactus');
    }

    public function cart()
    {
        return view('front.cart');
    }

    public function categories()
    {
        return view('front.categories');
    }
}
