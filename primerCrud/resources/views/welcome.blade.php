@extends('layout/plantilla')

@section('tituloPagina', 'Bienvenido a PrimerCrud')

@section('contenido')

<br><br>
<div class="card">
    <h5 class="card-header">Ferreteria el Momero</h5>
    <div class="card-body">
      <h5 class="card-title">Listado de productos</h5>
      <p>
            <a href="{{ route("productos.create") }}" class="btn btn-primary">Agregar producto</a>
            <a href="{{ route("productos.edit") }}" class="btn btn-primary">Actualizar producto</a>
      </p>
      <hr>
      

        <p class="card-text">
            <div class="table table-responsive">
                <table class="table table-sm table-bordered">
                    <thead>
                        <td>Codigo</td>
                        <td>Nombre</td>
                        <td>PrecioC</td> 
                        <td>PrecioV</td>
                        <td>Cantidad</td>
                        <td>Editar</td>
                        <td>Eliminar</td>
                    </thead>
                    <tbody>
                        @foreach ($datos as $item)
                        <tr>
                            <td>{{ $item->codigoP}}</td>
                            <td>{{ $item->nomProducto}}</td>
                            <td>{{ $item->PrecioC}}</td>
                            <td>{{ $item->PrecioV}}</td>
                            <td>{{ $item->Cantidad}}</td>
                            <td></td>
                            <td></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </p>
    </div>
  </div>



@endsection
   