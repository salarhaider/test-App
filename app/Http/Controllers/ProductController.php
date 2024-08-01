<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class productcontroller extends Controller
{
    public function index() {

        return view('products', ['products'=>Product::get()]);
    }

    public function create_product() {
        return view('create_product');
    }




    public function add_product(Request $request) {

        $imageName = time().'_'.$request->name.'.'.$request->image->extension();

        $request->validate([

            'name'=> 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,webp|max:3000',
        ]);

        $product = new product;

        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->image = $imageName;
        $request->image->move(public_path('product_images'), $imageName);
        $product->save();

        return redirect()->route('all_products')->withSuccess('Product Created Successfully');
    }

    public function fetch_single_product($id) {

        $product = Product::where('id', $id)->first();

        return view('view_product', ['product'=>$product]);
    }




}
