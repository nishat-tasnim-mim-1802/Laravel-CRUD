<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller

{
    public function index()
    {
        return view('admin.product.index',['products' => Product::all()]);
    }
    public function create()
    {
        return view('admin.product.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'price' => 'required',
        ]);

        $product = new Product();
        $product->name      = $request->name;
        $product->quantity      = $request->quantity;
        $product->price      = $request->price;
        $product->save();

        return redirect()->route('product.index')->with('message','Product added successfully');

    }

    public function edit($id)
    {
        return view('admin.product.edit',['product' =>  Product::find($id)]);
    }
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name      = $request->name;
        $product->quantity      = $request->quantity;
        $product->price      = $request->price;
        $product->save();

        return redirect()->route('product.index')->with('message','Product updated successfully');
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product.index')->with('message','Product deleted successfully');
    }
}
