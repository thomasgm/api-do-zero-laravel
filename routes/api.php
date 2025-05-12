<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*Route::get('hello-post/{name}', 'App\Http\Controllers\HelloWorldController@helloPost');
Route::post('hello-post/{name}', 'App\Http\Controllers\HelloWorldController@helloPost1');

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
*/

Route::get('bands', 'App\Http\Controllers\BandController@getAll');
Route::get('bands/{id}', 'App\Http\Controllers\BandController@getById');
Route::get('bands/gender/{gender_id}', 'App\Http\Controllers\BandController@getBandsByGender');
Route::post('bands/store', 'App\Http\Controllers\BandController@store');