<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::Resource('/products','ProductController');
Route::apiResource('products', ProductController::class);


Route::group(['prefix'=>'products'],function(){
    Route::apiResource('/{product}/reviews', ReviewController::class);
	// Route::apiResource('/{product}/reviews','ReviewController');
});
// Route::resource('products', ProductController::class);
