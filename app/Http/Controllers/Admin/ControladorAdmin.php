<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;


class ControladorAdmin extends Controller
{
    public function clientes(){
        return view('mensajeAdmin')-> with (['text' => 'Ir a: ']);
    }
    public function facturacion(){
        return view('mensajeAdmin')-> with (['text' => 'Ir a: ']);
    }
    public function contabilidad(){
        return view('mensajeAdmin')-> with (['text' => 'Ir a:  ']);
    }
}
