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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/tiendas/{id?}","Api\TiendasController@index")->where("id","[0-9]+");

Route::post("/tiendas","Api\TiendasController@guardar");

Route::get("/tiendas/{id?}/{nombre?}","Api\TiendasController@editar");

Route::delete("/tiendas/{id?}","Api\TiendasController@eliminar");