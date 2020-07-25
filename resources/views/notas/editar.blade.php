@extends('plantilla')

@section('seccion')
    <h1>Editar nota {{ $nota->id }}</h1>
    @if (session('mensaje'))
            <div class="alert alert-success">
                {{ session('mensaje') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
    <form action="{{ route('notas.update', $nota->id) }}" method="POST">
        @method('PUT')
        @csrf

        @error('nombre')
        <div class="alert alert-danger">
            El nombre es obligatorio
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @enderror

        @error('descripcion')
        <div class="alert alert-danger">
            La descripción es obligatorio
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @enderror

        <input 
            type="text" 
            name="nombre" 
            placeholder="Nombre" 
            class="form-control mb-2" 
            value="{{ $nota->nombre }}"
        >
        <input 
            type="text" 
            name="descripcion" 
            placeholder="Descripción" 
            class="form-control mb-2" 
            value="{{ $nota->descripcion }}"
        >
        <button class="btn btn-warning btn-block" type="submit">Actualizar</button>
    </form>
@endsection
