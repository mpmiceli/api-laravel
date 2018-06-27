<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuarioController extends Controller
{
    public function crearUsuarios()
    {
        $curl = curl_init("https://randomuser.me/api/?results=16");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($curl);
        curl_close($curl);

        $response = json_decode($result);

        $ids = array();
       

        foreach($response->results as $result) {
            $usuario = new Usuario();
            $usuario->nombre = $result->name->first;
            $usuario->apellido = $result->name->last;
            $usuario->direccion = $result->location->street;
            $usuario->ciudad = $result->location->city;
            $usuario->estado = $result->location->state;
            $usuario->telefono = $result->phone;
            $usuario->email = $result->email;
            $usuario->imagen = $result->picture->large;
            $usuario->save();
            $ids[] = $usuario->id;
        }
    }

    public function listado()
    {
        $this->crearUsuarios();

        $usuarios = Usuario::whereNotNull('nombre')->get();
        //return $usuarios;
        return view(
            'usuario.listado',
            ['usuarios' => $usuarios]
        );

    }

    public function detalle($id)
    {
        $usuario = Usuario::where('id', $id)->first();    
        return view(
            'usuario.detalle',
            [
                'usuario' => $usuario
            ]
        );
    }
}
