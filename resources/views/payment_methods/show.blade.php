@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalle del Método de Pago</h1>

    <div class="mb-3">
        <strong>ID:</strong> {{ $paymentMethod->id }}
    </div>
    <div class="mb-3">
        <strong>Nombre:</strong> {{ $paymentMethod->name }}
    </div>
    <div class="mb-3">
        <strong>Creado:</strong> {{ $paymentMethod->created_at->format('d/m/Y H:i') }}
    </div>
    <div class="mb-3">
        <strong>Actualizado:</strong> {{ $paymentMethod->updated_at->format('d/m/Y H:i') }}
    </div>

    <a href="{{ route('payment_methods.edit', $paymentMethod) }}" class="btn btn-warning">Editar</a>
    <a href="{{ route('payment_methods.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
