<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function registro ()
    {
        return view('registro.Registro');
    }
    public function login ()
    {
        return view('login.Login');
    }
    public function comunidad ()
    {
        return view('comunidad.Comunidad');
    }

    public function derechos ()
    {
        return view('derechos.Derechos');
    }

    public function informacion ()
    {
        return view('informacion.Informacion');
    }

    public function mision ()
    {
        return view('mision.mision');
    }

    public function contenido ()
    {
        return view('contenido.Contenido');
    }
}
