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

    public function store(){

    }

    public function create(){
        return 'This is the form to create product from CONTROLLER.';
    }

    public function show($product){

        $product = Product::findOrFail($product);

        return view('products.show')->with([
            'product' => $product,
        ]);
    }

    public function update($product){

    }
    public function destroy($product){

    }

    public function edit($product){
        return "Showing the form to edit product with id {$product} from CONTROLLER.";
    }


}
