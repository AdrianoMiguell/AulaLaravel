<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function showProducts() {
        return view('show-products');
    }

    public function createProduct() {
        return view('create-product');
    }

    public function create(Request $request) {
        // Product::create( [
        //     'name'=>$request->name,
        //     'price'=>$request->price,
        //     'description'=>$request->description
        // ]);

        $request->validate([
            'name' => 'required|unique:products',
            'price' => 'required|numeric'
        ], [
            'name.unique' => 'Não fale isso'
        ]);

        Product::create($request->except('_token'));
        return redirect()->route('PageShowProducts');
    }
}
