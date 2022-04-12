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
    //No es necesario colocar la ruta de la vista, pues laravel espera que las vistas esten siempre en resources/views
    // Entonces solo le pongo el nombre de la vista, ni tampoco es necesario la extension de la vista :D
    return view('notes');
});

Route::get('/notas/crear', function(){
    return view('add-notes');
});


// -------------------Ruta dinamica ----------------------------
Route::get('/notas/{id}/editar', function($id){
    return "editar nota:" . $id;
    // el where siguiente indica que id recibe solo numeros (\d+ <-- esta es una expresion regular) 
})->where ('id', '\d+');