<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

/* El primer parametro es el nombre de la ruta y el segundo parametro es el nombre del archivo*/

Route::view('/','Welcome')->name('rutaInicio');
Route::view('/formulario','formulario')->name('rutaFormulario');
Route::view('/recuerdos','recuerdos')->name('rutaRecuerdos');
