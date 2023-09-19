@extends('layout/plantilla')

@section('tituloPagina', 'Crear un nuevo registro')

@section('contenido')

<div class="card">
    <h5 class="card-header">Agregar Productos</h5>
    <div class="card-body">

      <p class="card-text">
        <form action="#">
            <label for="">Codigo</label>
            <input type="text" name="codigoP" class="form-control" required>
            <label for="">Nombre</label>
            <input type="text" name="nomProducto" class="form-control" required>
            <label for="">PrecioC</label>
            <input type="text" name="PrecioC" class="form-control" required>
            <label for="">CodigoV</label>
            <input type="text" name="PrecioV" class="form-control" required>
            <label for="">Cantidad</label>
            <input type="text" name="Cantidad" class="form-control" required>
            <br>
            <a href="{{ route("productos.index") }}" class="btn btn-info">Regresar</a>
            <button class="btn btn-primary">Agregar</button>
            
        </form>
      </p>

    </div>
  </div>

@endsection