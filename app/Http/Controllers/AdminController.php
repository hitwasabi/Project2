<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{


    //
    function viewHome(){
        return view('admin/home');
    }

    function viewClient(){
        return view('client/home');
    }

    function viewProduct(){
        $products = Product::all();
        dd($products);
        return view('client/home',['home'=>$products]);
    }

    function show($id){
        $products = Product::findById($id);
        return view('client/home',['home'=>$products]);
    }
}
