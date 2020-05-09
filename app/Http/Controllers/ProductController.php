<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index(){
        return view('products.index');
    }

    public function store(){

    }

    public function create(){
        return 'This is the form to create product from CONTROLLER.';
    }

    public function show($product){
        return view('products.show');
    }

    public function update($product){

    }
    public function destroy($product){

    }

    public function edit($product){
        return "Showing the form to edit product with id {$product} from CONTROLLER.";
    }


}
