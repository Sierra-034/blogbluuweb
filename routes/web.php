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
    return view('welcome');
});

// Si existen parámetros en la ruta, 
// estos se deben agregar a la declaración del método
Route::get('fotos/{numero?}', function($numero = 'no_number') {
    return 'Estás en la galería de fotos : ' . $numero;
})->where('numero', '[0-9]+');  // Expresiones regulares para restringir los parámetros

// Si solo se requiere retornar una vista podemos usar el siguiente método
// También podemos proporcionar variables a través de un tercer argumento como se muestra
Route::view('galeria', 'fotos', ['numero' => 125]);