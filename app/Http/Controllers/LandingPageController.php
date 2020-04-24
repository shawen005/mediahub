<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        $categories = Category::all();
        $products = Product::where('featured', true)->take(8)->inRandomOrder()->get();

        return view('landing-page', compact('products','categories'));
    }
}
