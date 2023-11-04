<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contactos;
class ContactoController extends Controller
{
    //

    public function index(){
        $contactos=Contactos::all();
        return view('directorio',compact('contactos'));
    }
    public function create(){
        return view('agregarcontacto');
    }
    public function search(){
        return view('buscar');
    }
    public function delete(){
        return view('eliminar');
    }
    public function goBack(){
        return view('directorio');
    }
    public function store(Request $request){
        $contacto= new Contactos();
        
        $contacto->nombre=$request->input("nombre");
        $contacto->apellido=$request->input("apellido");
        $contacto->correo=$request->input("correo");
        $contacto->telefono=$request->input("telefono");
        $contacto->save();
        return redirect()->route('inicioContacto');
        
    }
    
    
    public function searchCorreo(Request $correo){
        
        $contacto=Contactos::find($correo);
        $contacto->correo=$request->input("correo");
        if($contacto<>null){
            return $contacto;
        }
        
    }
    public function show($id){
        $contactos=Contactos::find($id);
        //return $contactos;
        return view('vercontactos',compact('contactos'));
    }
    
    
}
