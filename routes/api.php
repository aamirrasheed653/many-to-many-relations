<?php

use App\Http\Controllers\BranchController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::controller(BranchController::class)->group(function () {
    Route::post('/storeBranch', 'storeBranch');//add new branch
    Route::get('/indexBranch', 'indexBranch');//get all branches
    Route::get('/showBranch/{branch}', 'showBranch');//show  one branch detail
});
Route::controller(ProductController::class)->group(function () {
    Route::post('/storeProduct/{branch}', 'storeProduct');//add new product with branch
    Route::get('/indexProduct', 'indexProduct');//get all products
    Route::get('/showProduct/{product}', 'showProduct');//show  one product detail
});
