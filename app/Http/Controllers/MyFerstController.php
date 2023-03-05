<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyFerstController extends Controller
{
    public function index(){
        if( Auth::user()){
            $products = Product::all();
            return view('products.index', compact('products'));
        }
        else{
            return view('home');
        }

    }


    public function create(){
        if( Auth::user()){
            return view('products.create');
        }
        else{
            return view('home');
        }


    }

    public function store(){
        $data = request()->validate([
            'name' => 'string',
            'description' => 'string',
            'price' => 'integer',
            'photo' => 'string',
        ]);
        Product::create($data);
        return redirect() -> route('products.index');
    }

    public function show (Product $product){
        if( Auth::user()){
            return view('products.show', compact('product'));
        }
        else{
            return view('home');
        }

    }


    public function edit(Product $product){
        if( Auth::user()){
            return view('products.edit', compact('product'));
        }
        else{
            return view('home');
        }


    }

    public function update(Product $product){
        $data = request()->validate([
            'name' => 'string',
            'description' => 'string',
            'price' => 'integer',
            'photo' => 'string',
        ]);
        $product->update($data);
        return redirect() -> route('products.show', $product -> id);
    }

    public function destroy (Product $product){
        $product->delete();
        return redirect() -> route('products.index');
    }
}
