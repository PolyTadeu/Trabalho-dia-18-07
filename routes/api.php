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

Route::get ('mostraAluno/{id}', 'ProjetoVagnerController@showAluno');
Route::get ('listaAluno', 'ProjetoVagnerController@listAluno');
Route::post('criaAluno','ProjetoVagnerController@createAluno');
Route::put('atualizaAluno/{id}','ProjetoVagnerController@updateAluno');
Route::delete('deletaAluno/{id}', 'ProjetoVagnerController@deleteAluno');



Route::get ('mostraBoletim/{id}', 'BoletimController@showBoletim');
Route::get ('listaBoletim', 'BoletimController@listBoletim');
Route::post('criaBoletim','BoletimController@createBoletim');
Route::put('atualizaBoletim/{id}','BoletimController@updateBoletim');
Route::delete('deletaBoletim/{id}', 'BoletimController@deleteBoletim');