<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }

    public function addProduct(Request $request){
        $label = $request->label;
        $description = $request->description;
        $price = $request->price;
        return Product::create(['label' => $label, 'description' => $description, 'price' => $price]);
    }

    public function editProduct(Request $request){
        $label = $request->label;
        $description = $request->description;
        $price = $request->price;
    }

    public function deleteProduct(Request $request)
    {
        $id = $request->id;
        return Product::find($id)->delete()
    }
}
