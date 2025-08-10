@extends('layouts.base')
@section('content')

<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Lista de Produtos</h1>
    <a href="{{ route('produtos.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Adicionar Produto</a>
    <table class="min-w-full bg-white border border-gray-200">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">ID</th>
                <th class="py-2 px-4 border-b">Nome</th>
                <th class="py-2 px-4 border-b">Descrição</th>
                <th class="py-2 px-4 border-b">Preço</th>
                <th class="py-2 px-4 border-b">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produtos as $produto)
            <tr>
                <td class="py-2 px-4 border-b">{{ $produto->id }}</td>
                <td class="py-2 px-4 border-b">{{ $produto->nome }}</td>
                <td class="py-2 px-4 border-b">{{ $produto->descricao }}</td>
                <td class="py-2 px-4 border-b">{{ number_format($produto->preco, 2, ',', '.') }}</td>
                <td class="py-2 px-4 border-b">
                    <a href="{{ route('produtos.show', $produto->id) }}" class="text-blue-500 hover:underline">Ver</a>
                    <a href="{{ route('produtos.edit', $produto->id) }}" class="text-yellow-500 hover:underline">Editar</a>
                    <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:underline">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-4">
        {{ $produtos->links() }}
    </div>
</div>

@endsection
