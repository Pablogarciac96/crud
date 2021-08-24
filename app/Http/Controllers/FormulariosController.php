<?php

namespace App\Http\Controllers;

use App\Models\Formulario;
use Illuminate\Http\Request;

class FormulariosController extends Controller
{
    public function enviarFormulario(Request $request) {
        
        $request->validate([
                'nombre'=>'required|alpha',
                'apellido'=>'required','alpha',
                'telefono'=>'required|numeric|min:10|max:99999999',
                'direccion'=>'required',
                'email'=>'required','email|unique:users,email',
                'password'=>'required',
                

                
        ]);


        $form=new Formulario($request->all());
        $form->nombre= $request->input('nombre');
        $form->apellido= $request->input('apellido');
        $form->telefono= $request->input('telefono');
        $form->direccion= $request->input('direccion');
        $form->email= $request->input('email');
        $form->contraseña= $request->input('password');
   

        $form->save();

           
       return "registro guardado con exito";
   
       
       }
 
}
