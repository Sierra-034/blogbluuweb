<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function inicio() { return view('welcome'); }

    public function fotos() { return view('fotos'); }

    public function blog() { return view('blog'); }

    public function nosotros($member = null) {
        $equipo = ['Samuel Gómez Balderas', 
            'Cristhian Enrique Olivares Lara', 
            'Josué Idahir Cruz Cortez',
            'Erick Ricardo García García'];

        // return view('nosotros', ['equipo' => $equipo, 'otra-variable' = $otra-variable]); // Se envían los datos como un objeto json forma larga
        // Con esto le decimos a Blade que la variable asignada es equipo (solo funciona si el nombre es el mismo)
        // Para pasar más de una variable simplemente las separamos por comas en la función compact()
        return view('nosotros', compact('equipo', 'member'));
    }
}
