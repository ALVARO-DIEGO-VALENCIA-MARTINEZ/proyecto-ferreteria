@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Cupón</h1>

    <form action="{{ route('coupons.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="code" class="form-label">Código</label>
            <input type="text" name="code" class="form-control" value="{{ old('code') }}" required>
            @error('code') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="discount_amount" class="form-label">Monto de Descuento</label>
            <input type="number" step="0.01" name="discount_amount" class="form-control" value="{{ old('discount_amount') }}" required>
            @error('discount_amount') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="discount_type" class="form-label">Tipo de Descuento</label>
            <select name="discount_type" class="form-select" required>
                <option value="percentage" {{ old('discount_type') == 'percentage' ? 'selected' : '' }}>Porcentaje</option>
                <option value="fixed" {{ old('discount_type') == 'fixed' ? 'selected' : '' }}>Monto Fijo</option>
            </select>
            @error('discount_type') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="valid_from" class="form-label">Válido Desde</label>
            <input type="datetime-local" name="valid_from" class="form-control" value="{{ old('valid_from') }}" required>
            @error('valid_from') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <label for="valid_until" class="form-label">Válido Hasta</label>
            <input type="datetime-local" name="valid_until" class="form-control" value="{{ old('valid_until') }}" required>
            @error('valid_until') <div class="text-danger">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('coupons.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
