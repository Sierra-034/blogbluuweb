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

Route::get('fotos', function() {
    return view('fotos');
})->name('foto');

Route::get('blog', function() {
    return view('blog');
})->name('noticias');

// Devolvemos datos para uso en la vista
Route::get('nosotros/{member?}', function($member = null) {
    $equipo = ['Samuel Gómez Balderas', 
        'Cristhian Enrique Olivares Lara', 
        'Josué Idahir Cruz Cortez',
        'Erick Ricardo García García'];

    // return view('nosotros', ['equipo' => $equipo, 'otra-variable' = $otra-variable]); // Se envían los datos como un objeto json forma larga
    // Con esto le decimos a Blade que la variable asignada es equipo (solo funciona si el nombre es el mismo)
    // Para pasar más de una variable simplemente las separamos por comas en la función compact()
    return view('nosotros', compact('equipo', 'member'));
})->name('nosotros');