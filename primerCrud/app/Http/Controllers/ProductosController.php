<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index()
    {
        //pagina de inicio
        $datos = Productos::all();
        return view('welcome',compact('datos'));
    }

    
    public function create()
    {
        //el formulario donde se agregan los datos
        return view('agregar');
    }

    public function store(Request $request)
    {
        //sirve para guardar en la bd
    }

    public function show(Productos $productos)
    {
        //servira para obtener un registro de nuestra tabla
        return view('eliminar');
    }

    public function edit(Productos $productos)
    {
        //este metodo sirve para traer los datos que se van a editar
        // y los coloca en el formulario 
        return view('actualizar');
    }


    public function update(Request $request, Productos $productos)
    {
        //aca se actualizan los datos
    }

    public function destroy(Productos $productos)
    {
        //elimina un registro
    }
}
