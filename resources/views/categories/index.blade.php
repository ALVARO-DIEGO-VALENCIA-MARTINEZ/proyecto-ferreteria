@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Categorías</h1>

    <a href="{{ route('categories.create') }}" class="btn btn-primary">Crear Categoría</a>

    @if(session('success'))
        <div class="alert alert-success mt-3">
            {{ session('success') }}
        </div>
    @endif

    <table class="table mt-3">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->nombre }}</td>
                    <td>
                        <a href="{{ route('categories.show', $category) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('categories.edit', $category) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
