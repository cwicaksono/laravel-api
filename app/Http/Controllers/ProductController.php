<?php

namespace App\Http\Controllers;
   
use Illuminate\Http\Request;
use App\Models\Product;
use Validator;
   
class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return response()->json($products);
    }
    
    public function store(Request $request)
    {
        $input = $request->all();
   
        $validator = Validator::make($input, [
            'name' => 'required',
            'detail' => 'required'
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $product = Product::create($input);
   
        return response()->json(['message' => 'Produk berhasil dibuat']);
    } 
   
    public function show($id)
    {
        
    }
    
    public function update(Request $request, Product $product)
    {
        
    }
   
    public function destroy(Product $product)
    {
    }
}