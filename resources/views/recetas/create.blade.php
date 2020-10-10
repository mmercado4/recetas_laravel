@extends('layouts.app')

@section('styles')  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.4/trix.css" integrity="sha512-qjOt5KmyILqcOoRJXb9TguLjMgTLZEgROMxPlf1KuScz0ZMovl0Vp8dnn9bD5dy3CcHW5im+z5gZCKgYek9MPA==" crossorigin="anonymous" />
@endsection

@section('botones')
    
    <a href="{{route('recetas.index')}}" class="btn btn-primary mr-2 text-white">Volver</a>

@endsection

@section('content')

    <h2 class="text-center mb-5">Crear nueva receta</h2>

    <div class="row justify-content-center mt-5">
        <div class="col-md-8">
            <form action="{{route('recetas.store')}}" method="POST" enctype="multipart/form-data" novalidate>

                @csrf

                <div class="form-group">
                    <label for="titulo">Título Receta</label>
                <input type="text" name="titulo" value="{{old('titulo')}}" class="form-control @error('titulo') is-invalid @enderror" id="titulo" placeholder="Título receta">

                    @error('titulo')
                        <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="categoria">Categoría</label>
                    <select name="categoria" class="form-control @error('categoria') is-invalid @enderror" id="categoria">
                        <option value="">-- Seleccione la categoría --</option>
                        @foreach ($categorias as $categoria)
                            <option value="{{$categoria->id}}" {{old('categoria') == $categoria->id ? 'selected' : ''}}>{{$categoria->nombre}}</option>
                        @endforeach
                        
                    </select>

                    @error ('categoria')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                        </span>
                    @enderror

                </div>

                <div class="form-group mt-3">
                    <label for="preparacion">Preparación</label>
                    <input type="hidden" id="preparacion" name="preparacion" value="{{old('preparacion')}}">
                    <trix-editor class="form-control @error('preparacion') is-invalid @enderror" input="preparacion"></trix-editor>

                    @error ('preparacion')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group mt-3">
                    <label for="ingredientes">Ingredientes</label>
                    <input type="hidden" id="ingredientes" name="ingredientes" value="{{old('ingredientes')}}">
                    <trix-editor class="form-control @error('ingredientes') is-invalid @enderror" input="ingredientes"></trix-editor>

                    @error ('ingredientes')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group mt-3">
                    <label for="imagen">Imagen</label>
                    <input type="file" id="imagen" name="imagen" class="form-control  @error('imagen') is-invalid @enderror">

                    @error ('imagen')
                        <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                        </span>
                    @enderror

                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Agregar receta" name="" id="">
                </div>
            </form>

        </div>
    </div>

@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.4/trix.js" integrity="sha512-zEL66hBfEMpJUz7lHU3mGoOg12801oJbAfye4mqHxAbI0TTyTePOOb2GFBCsyrKI05UftK2yR5qqfSh+tDRr4Q==" crossorigin="anonymous"></script>
@endsection