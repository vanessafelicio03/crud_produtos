@extends('layouts.base')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Detalhes do Produto</h1>
        <div class="bg-white shadow-md rounded p-4">
            <p><strong>ID:</strong> {{ $produto->id }}</p>
            <p><strong>Nome:</strong> {{ $produto->nome }}</p>
            <p><strong>Descrição:</strong> {{ $produto->descricao }}</p>
            <p><strong>Preço:</strong> {{ number_format($produto->preco, 2, ',', '.') }}</p>
            <a href="{{ route('produtos.index') }}" class="mt-4 inline-block bg-gray-500 text-white px-4 py-2 rounded">Voltar à Lista</a>
        </div>
    </div>
@endsection
