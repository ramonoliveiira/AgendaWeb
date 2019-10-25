<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\PessoasController;

Route::get('/', function () {
    return view('template.app');
});

//Manda para a função index dentro de PessoasController
//Route::get('/', 'PessoasController@index');


Route::group(['prefix' => 'pessoas'], function () {
    Route::get('/{letra}', 'PessoasController@index');
    Route::get('/novo', 'PessoasController@novoView');
    Route::get('/{id}/editar', 'PessoasController@editarView');
    Route::get('/{id}/excluir', 'PessoasController@excluirView');
    Route::get('/{id}/destroy', 'PessoasController@destroy');
    Route::post('/busca', 'PessoasController@busca');
    Route::post('/store', "PessoasController@store");
    Route::post('/update', "PessoasController@update");
    
    
});
/*Route::get('/teste', function () {
    return view('teste');
});*/
