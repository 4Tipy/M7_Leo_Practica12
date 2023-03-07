<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;


class ControladorAdmin extends Controller
{
    public function clientes(){
        return view('mensajeAdmin')-> with (['text' => 'Este es la sección de Clientes']);
    }
    public function facturacion(){
        return view('mensajeAdmin')-> with (['text' => 'Este es la sección de Facturación']);
    }
    public function contabilidad(){
        return view('mensajeAdmin')-> with (['text' => 'Este es la sección de Contabilidad']);
    }
}
