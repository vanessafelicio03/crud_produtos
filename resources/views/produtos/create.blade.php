@extends('layouts.base')

@section('content')

<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Adicionar Produto</h1>
    <form action="{{ route('produtos.store') }}" method="POST" class="space-y-4">
        @csrf
        @include('produtos.form')
    </form>
@endsection
