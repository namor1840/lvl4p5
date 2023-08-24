<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
  
    public function create(Request $datosdelPost)
    {
     $nuevoUsuario = new Usuario();
     $nuevoUsuario->nombre=$datosdelPost->nombre;
     $nuevoUsuario->apellido=$datosdelPost->apellido;
     $nuevoUsuario->correo=$datosdelPost->correo;
     $nuevoUsuario->contra=$datosdelPost->contra;
     $nuevoUsuario->save();
     return "El Usuario se creo exitosamente";

    }

  
}
