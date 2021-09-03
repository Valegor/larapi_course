<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('categories', 'App\Http\Controllers\Api\CategoryController@index');


//Users/valeriygorbunov/Documents/koropapi.loc/app/Http/Controllers/Api/CategoryController.php
//Route::get('categories/{category}', 'Api\CategoryController@show');
//Route::post('categories', 'Api\CategoryController@store');
//Route::put('categories/{category}', 'Api\CategoryController@update');
//Route::delete('categories/{category}', 'Api\CategoryController@destroy');

// Route::apiResource('categories', 'Api\CategoryController')
//     ->middleware('auth:sanctum');

// Route::get('products', 'Api\ProductController@index');