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

Route::get('/', function () {
    return view('template/welcome');
});

Route::get('/contato', function () {
    return view('template/contato');
});

Route::get('/categoria', function () {
    return view('template/categoria');
});

Route::get('/cliente', function () {
    return view('template/cliente');
});

Route::get('/pedido', function () {
    return view('template/pedido');
});

Route::get('/produto', function () {
    return view('template/produto');
});

/*Route::get('/contato','ContatoController@index')