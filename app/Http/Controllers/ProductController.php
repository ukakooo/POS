<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products() {
        return view('products');
    }

    public function fnb() {
        return view('category.fnb');
    }

    public function beautyhealth() {
        return view('category.beauty-health');
    }

    public function homecare() {
        return view('category.homecare');
    }

    public function babykid() {
        return view('category.babykid');
    }
}
