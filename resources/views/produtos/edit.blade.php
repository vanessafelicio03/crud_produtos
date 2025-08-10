@extends('layouts.base')

@section('content')

    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Editar Produto</h1>
        <form action="{{ route('produtos.update', $produto->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
            @include('produtos.form')
        </form>
    </div>

@endsection
