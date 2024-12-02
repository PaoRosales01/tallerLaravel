<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
   // Funcion que mostrara todos los productos
   public function index(){ 
    $productList = Product::all();
    return view('product.all', ['productList'=>$productList]);
   }

   //Funcion que mostrara productos
   public function show($id){
    $product = Product::find($id);
    $data['product']= $product;
    return view('product.show', $data);
   }

   //Funcion para visualizar for de crear producto
   public function create(){
    return view('product.form');
   }

   //Funcion para almacenar nuevo producto
   public function store(Request $request) {
  
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->save();
        return redirect()->route('products.index');


    
}

    //Funcion que edita un producto
    public function edit($id){
        $product = Product::find($id);
        return view ('product.form', array('product'=>$product));
    }

    //Funcion que actualiza la informacion de un producto
   // update
public function update($id, Request $request) {
    $product = Product::find($id);
    $product->name = $request->name;
    $product->price = $request->price;
    $product->save();
    return redirect()->route('products.index');
}

public function destroy($id) {
    $product = Product::find($id);
    $product->delete();  // Elimina el producto
    return redirect()->route('products.index');
}
}
