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

Route::prefix('estado')->group(function () {
    //Route::post('/', 'API\UserController@incluir');
    //Route::put('/', 'API\UserController@atualizar');//teste
    Route::get('obterPorTodos', 'EstadoController@obterPorTodos');
    Route::get('obterPorId/{pk}', 'EstadoController@obterPorId');
});
