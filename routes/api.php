<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('articles', ['uses' => 'ArticleController@index']);

Route::get('article/{id}', ['uses' => 'ArticleController@show'])->where('id', '\d+');

// Create new article
Route::post('article', ['uses' => 'ArticleController@store']);

// Update article
Route::put('article', ['uses' => 'ArticleController@store']);

Route::delete('article/{id}', ['uses' => 'ArticleController@destroy'])->where('id', '\d+');