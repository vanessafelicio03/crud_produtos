<div>
    <label for="nome" class="block text-sm font-medium text-gray-700">Nome</label>
    <input type="text" name="nome" id="nome"
        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required
        value="{{ old('nome', $produto->nome ?? '') }}">
</div>
<div>
    <label for="descricao" class="block text-sm font-medium text-gray-700">Descrição</label>
    <textarea name="descricao" id="descricao" rows="4"
        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">{{ old('descricao', $produto->descricao ?? '') }}</textarea>
</div>
<div>
    <label for="preco" class="block text-sm font-medium text-gray-700">Preço</label>
    <input type="number" name="preco" id="preco" step="0.01"
        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" required
        value="{{ old('preco', $produto->preco ?? '') }}">
</div>
<div>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Salvar</button>
    <a href="{{ route('produtos.index') }}" class="ml-4 text-gray-500 hover:underline">Cancelar</a>
</div>
