<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/notas', function() {
    return "listado de notas";
});

Route::get('/notas/crear', function(){
    return "crear nuevas notas";
});


// -------------------Ruta dinamica ----------------------------
Route::get('/notas/{id}/editar', function($id){
    return "editar nota:" . $id;
    // el where siguiente indica que id recibe solo numeros (\d+ <-- esta es una expresion regular) 
})->where ('id', '\d+');