<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserloginController;

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
Route::post('registration','App\Http\Controllers\UserloginController@store');

Route::get('workshop','App\Http\Controllers\WorkshopController@index');   
Route::post('workshop','App\Http\Controllers\WorkshopController@store');   
Route::get('workshop/{id}','App\Http\Controllers\WorkshopController@show');   
Route::put('workshop/{id}','App\Http\Controllers\WorkshopController@update'); 
Route::delete('workshop/{id}','App\Http\Controllers\WorkshopController@destroy');       
