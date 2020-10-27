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
Route::get('/usua', "UsersController@mostrarus");
Route::post('/inserus', "UsersController@createusu");
Route::put('/refreshus/{id}', "UsersController@refreshusu");
Route::delete('/dropus/{id}', "UsersController@eliminarusu");

Route::get('/ipost', "PostController@mostrarpost");
Route::post('/postcomm', "PostController@createpost");
Route::put('/inserpost/{id}', "PostController@refreshpost");
Route::delete('/refrespost/{id}', "PostController@eliminarpost");

Route::get('/comm', "ComentariosController@mostrarcom");
Route::post('/insercomm', "ComentariosController@createcom");
Route::put('/refreshcomm/{id}', "ComentariosController@refreshcom");
Route::delete('/dropcomm/{id}', "ComentariosController@eliminarcom");

