<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProducts() {
        return view('show-products');
    }

    public function createProduct() {
        return view('create-product');
    }

    public function create(Request $request) {
        return dd($request->name);
    }
}
