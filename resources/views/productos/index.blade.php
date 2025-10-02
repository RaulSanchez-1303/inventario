@extends('layouts.app')

@section('content')
<div class="container">
  <h1>📦 Lista de Productos</h1>
  <a href="{{ route('productos.create') }}" class="btn btn-primary">Nuevo Producto</a>

  <table class="table mt-4">
    <thead>
      <tr>
        <th>ID</th><th>Nombre</th><th>Cantidad</th><th>Precio</th><th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($productos as $producto)
      <tr>
        <td>{{ $producto->id }}</td>
        <td>{{ $producto->nombre }}</td>
        <td>{{ $producto->cantidad }}</td>
        <td>${{ $producto->precio }}</td>
        <td>
          <a href="{{ route('productos.edit', $producto) }}" class="btn btn-sm btn-warning">Editar</a>
          <form action="{{ route('productos.destroy', $producto) }}" method="POST" style="display:inline">
            @csrf @method('DELETE')
            <button class="btn btn-sm btn-danger">Eliminar</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection