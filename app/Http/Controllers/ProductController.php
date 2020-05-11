<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index(){

       // $products = Product::all();
       
        return view('products.index')->with([
            'products' => Product::all(),
        ]);
    }

    public function create(){
        return view('products.create');
    }

    public function store(){
        
        $product = Product::create(request()->all());

        return $product;
    }

    
    public function show($product){
        
        return view('products.show')->with([
            'product' => Product::findOrFail($product),
        ]);
    }

    public function edit($product){

        return view('products.edit')->with([
            'product' => Product::findOrFail($product),
        ]);
    }

    public function update($product){
        $product = Product::findOrFail($product);

        $product->update(request()->all());

        return $product;
    }

    public function destroy($product){
        $product = Product::findOrFail($product);

        $product->delete();
        
        return $product;
    }

    


}
