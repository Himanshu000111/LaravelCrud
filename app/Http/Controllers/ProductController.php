<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use App\Models\Product;

class ProductController extends Controller
{
    // This will show the product page
    public function index(){
        return view ('products.list');
    }

    //This will show the create product page
    public function create(){
        return view ('products.create');
    }

    //This will show the store products in db
    public function store(Request $request){
        $rules = [
            'name' => 'required|min:5',
            'sku' => 'required|min:3',
            'price' => 'required|numeric',
        ];

        if($request->image != ""){
            $rules['image'] = 'image';  
        }

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()) {
            return redirect()->route('products.create')->withInput()->withErrors($validator);
        }

        //Now we will store data in database
        $product = new Product();
        $product->name = $request->name;
        $product->sku = $request->sku;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();

        //here we will store the image in the db
        if($request->image != ""){
        $image = $request->image;
        $ext = $image->getClientOriginalExtension();
        $imageName = time().'.'.$ext;  //image unique name

        $image->move(public_path('uploads/products'), $imageName);

        //Save image name in DB
        $product->image = $imageName;
        $product->save();
        }

        return redirect()->route('products.list')->with('success', 'Product added successfully');
    }

    //This will show the edit product page
    public function edit(){

    }

    //This will update the product
    public function update(){
        
    }

    //This will delete the product
    public function destroy(){

    }
}
