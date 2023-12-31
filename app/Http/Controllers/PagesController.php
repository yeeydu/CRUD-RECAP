<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Products;
use App\Models\Slider;

class PagesController extends Controller
{

    public function index() // Home
    {
      return view('index');
    }

    public function slider(){
        $sliders = Slider::where('is_active','1')->get();
        return view('index', ['sliders' => $sliders]); // Homepage with Carousel
    }


    public function About()
    {
        $about = "About";
       //$page = Page::where('title','About')->first();
      return view('pages/about', ['about' => $about]); 
    }

    public function products()
    {
        
        $products = "Products";
        // $page = Page::where('title', 'Product')->first();
        // $products = Products::all();
        return view('pages/products', ['products'=> $products ]);
    }

    public function Contact()
    {
        $contact = "Contact";
       //$page = Page::where('title','Contact')->first();
      return view('pages/contact', ['contact' => $contact]); 
    }
}
