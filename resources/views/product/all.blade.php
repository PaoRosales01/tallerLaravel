@extends('layouts.master')

@section('title', 'Administracion de Productos')
@section('header', 'Administracion de Productos')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center">
            <h2>Administración de Productos</h2>
        </div>
        <div class="table-responsive">
            <table class="table table-striped text-center align-middle">
                <a class="btn btn-success" href="{{ route('products.create') }}">Agregar Nuevo Producto</a>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productList as $product)
                        <tr>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>${{ number_format($product->price, 2) }}</td>
                            <td>
                                <a class="btn btn-warning text-white"
                                    href="{{ route('products.edit', ['product' => $product->id]) }}">Modificar</a>
                                <form class="d-inline" action="{{ route('products.destroy', ['product' => $product->id]) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input class="btn btn-danger" type="submit" value="Eliminar">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
