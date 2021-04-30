<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\Product;

class ProductController extends Controller
{
    //createProduct
    public function createProduct(Request $request)
        {
        $product = new Product;
        $product->name= $request->name;
        $product->price = $request->price;
        $product->details= $request->details;
        $product->image = $request->image;
        $product->save();
        return response()->json($product);
    }

    //updateProduct
    public function updateProduct(Request $request, $id)
    {
    $product = Product::find($id);
    $product->name = $request->input('name');
    $product->details = $request->input('details');
    $product->image = $request->input('image');
    $product->price = $request->input('price');
    $product->save();
    return response()->json($product);
    }

// getAll Products
    public function getAll()
    {
        $product =Product::all();
        return response()->json($product);
    }

 //view Product
    public function viewProduct($id)
    {
    $product = Product::find($id);
    return response()->json($product);
    }

// delete Product
    public function deleteProduct($id)
    {
    $product = Product::find($id);
    $product->delete();
    return response()->json('Removed successfully');
    }


}
