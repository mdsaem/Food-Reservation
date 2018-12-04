<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Item;
use App\Category;

class HomeController extends Controller
{
    public function index(){
    	$sliders=Slider::all();
    	$categories=Category::all();
    	$items=Item::all();
    	return view('welcome',compact('sliders','categories','items'));
    }
}
