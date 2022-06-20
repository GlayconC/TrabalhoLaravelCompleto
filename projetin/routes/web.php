<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarrosController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/carros', 
    'App\Http\Controllers\CarrosController@index');

Route::get('/carros/create', 
    'App\Http\Controllers\CarrosController@create');

Route::post('/carros', 
    'App\Http\Controllers\CarrosController@store');

Route::put('/carros/{id}', 
    'App\Http\Controllers\CarrosController@update');

Route::get('/carros/{id}', 
    'App\Http\Controllers\CarrosController@destroy');

Route::get('/carros/{id}/edit', 
    'App\Http\Controllers\CarrosController@edit');



Route::get('/estados', 
    'App\Http\Controllers\EstadosController@index');

Route::get('/estados/create', 
    'App\Http\Controllers\EstadosController@create');

Route::post('/estados', 
    'App\Http\Controllers\EstadosController@store');

Route::put('/estados/{id}', 
    'App\Http\Controllers\EstadosController@update');

Route::get('/estados/{id}', 
    'App\Http\Controllers\EstadosController@destroy');

Route::get('/estados/{id}/edit', 
    'App\Http\Controllers\EstadosController@edit');


Route::get('/cidades', 
    'App\Http\Controllers\CidadesController@index');

Route::get('/cidades/create', 
    'App\Http\Controllers\CidadesController@create');

Route::post('/cidades', 
    'App\Http\Controllers\CidadesController@store');

Route::put('/cidades/{id}', 
    'App\Http\Controllers\CidadesController@update');

Route::get('/cidades/{id}', 
    'App\Http\Controllers\CidadesController@destroy');

Route::get('/cidades/{id}/edit', 
    'App\Http\Controllers\CidadesController@edit');
    

Route::get('/pessoas', 
    'App\Http\Controllers\PessoasController@index');

Route::get('/pessoas/create', 
    'App\Http\Controllers\PessoasController@create');

Route::post('/pessoas', 
    'App\Http\Controllers\PessoasController@store');

Route::put('/pessoas/{id}', 
    'App\Http\Controllers\PessoasController@update');

Route::get('/pessoas/{id}', 
    'App\Http\Controllers\PessoasController@destroy');

Route::get('/pessoas/{id}/edit', 
    'App\Http\Controllers\PessoasController@edit');