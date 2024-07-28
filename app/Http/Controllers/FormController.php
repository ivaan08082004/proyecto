<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\User;

class FormController extends Controller
{
public function index(){
    return view('index');

}
public function saveData(Request $request){
    $datosValidos = $request->validate([
    'email' => 'required|email',
    'nombre' => 'required|string',
    'fecha_de_nacimiento' => 'required|date',
    ]);
    $user = User::Create ([
        'nombre' => $datosValidos['nombre'],
        'email' => $datosValidos['email'],
        'fecha_de_nacimiento' => $datosValidos['fecha_de_nacimiento'],
    ]);
    return redirect('/')->with('usuario_creado',"el usuario con email {$user->nombre} ha sido creado correctamente ");

}
    // 
}
