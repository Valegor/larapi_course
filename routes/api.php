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
Route::get('categories/{category}', 'App\Http\Controllers\Api\CategoryController@show');

//Users/valeriygorbunov/Documents/koropapi.loc/app/Http/Controllers/Api/CategoryController.php
//Route::get('categories/{category}', 'Api\CategoryController@show');
Route::post('categories', 'App\Http\Controllers\Api\CategoryController@store');
Route::put('categories/{category}', 'App\Http\Controllers\Api\CategoryController@update');
Route::delete('categories/{category}', 'App\Http\Controllers\Api\CategoryController@destroy');

// Route::apiResource('categories', 'Api\CategoryController')
//     ->middleware('auth:sanctum');

Route::get('products', 'App\Http\Controllers\Api\ProductController@index');