@extends("layouts.master")

@section("title", isset($product) ? "Actualizar producto" : "Editar producto")

@section("header", isset($product) ? "Actualizar producto" : "Editar producto")

@section("content")
<div class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="container">
            <h2 class="text-center mb-5">{{ isset($product) ? "Actualizar producto" : "Agregar producto" }}</h2>
            @isset($product)
                <form action="{{ route('products.update', ['product' => $product->id]) }}" method="POST">
                    @method("PUT")
            @else
                <form action="{{ route('products.store') }}" method="POST">
            @endisset
                @csrf
                <div class="form-group row justify-content-center">
                    <label for="name" class="col-sm-2 col-form-label">Nombre del producto</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="name" name="name" value="{{ $product->name ?? '' }}">
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <label for="description" class="col-sm-2 col-form-label">Descripción</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="description" name="description" value="{{ $product->description ?? '' }}">
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <label for="price" class="col-sm-2 col-form-label">Precio</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="price" name="price" value="{{ $product->price ?? '' }}">
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <div class="col-sm-12 text-center">
                        <button type="submit" class="btn btn-primary my-5">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
