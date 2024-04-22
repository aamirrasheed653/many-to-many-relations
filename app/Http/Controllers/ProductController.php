<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Branch;


class ProductController extends Controller
{
    public function storeProduct(Request $request, Branch $branch)
    {


        $request->validate([
            'name' => 'required|string',
            'brand' => 'required|string',
            // 'branches' => 'required|string',
        ]);
        //find branch?
        $branchId = Branch::find($branch);
        //create product first
        if (!$branch) {
            return response()->json(['message' => 'branch not found']);
        }
        $product = Product::create([
            'name' => $request->input('name'),
            'brand' => $request->input('brand'),
            'branches' => $request->input('branches')
        ]);
        //then add the branches to this product
        $product->branches()->attach($branchId);
        return $product;
    }

    public function indexProduct(Branch $branch, Product $product)
    {
        return Product::with('branches')->get();
    }

    public function showProduct(Branch $branch, Product $product)
    {
        $product->load('branches');
        return $product;
    }

}
