<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;
use App\Models\Product;

class BranchController extends Controller
{
    public function storeBranch(Request $request)
    {
        //validate request
        $data = $request->validate([
            'name' => 'required|string',
            'city' => 'required',
        ]);
        return Branch::create($data);

    }

    public function indexBranch(Product $product)
    {
        return Branch::with('products')->get();
    }

    public function showBranch(Branch $branch)
    {
        $branch->load('products');
        return $branch;
    }
}
