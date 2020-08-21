<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('index', compact('products'));
    }

    public function create() {
        return view('create-product');
    }

    public function store(Request $request) {
        $request->validate([
            'product_name' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'description' => 'required'
        ]);

        Product::create($request->all());
        return redirect('/');
    }

    public function edit($id){
        $product = Product::findOrFail($id);
        return view('edit-product', compact('product'));
    }

    public function update(Request $request, $id) {
        $product = Product::findOrFail($id);

        $request->validate([
            'product_name' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'description' => 'required'
        ]);
        
        $product->update([
            'product_name' => $request->product_name,
            'price' => $request->price,
            'stock' => $request->stock,
            'description' => $request->description
        ]);

        return redirect('/');
    }

    public function show($id) {
        $product = Product::findOrFail($id);
        return view('detail-product', compact('product'));
    }

    public function destroy($id) {
        Product::destroy($id);
        return back();
    }

}
