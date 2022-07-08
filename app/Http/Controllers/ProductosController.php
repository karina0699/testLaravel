<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;

class ProductosController extends Controller
{

    public function index()
    {
        $products = Product::all();

        return view('app', compact('products'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $product = new Product;
        $product->title = $request->title;
        $product->country = $request->country;
        $product->price = $request->price;
        $product->save();

        return redirect()->route('products');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('update', compact('product'));
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products');

    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update($request->all());
        return redirect()->route('products');
    }

    public function logout(Request $request, Redirector $redirector){

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return $redirector->to('/login')->with('has cerrado sesion');
        

    }


}
