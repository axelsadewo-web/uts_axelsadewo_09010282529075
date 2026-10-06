@php $fields = [
    'title' => 'Judul', 'author' => 'Penulis', 'publisher' => 'Penerbit',
    'year' => 'Tahun Terbit', 'stock' => 'Stok',
]; @endphp

@foreach ($fields as $name => $label)
    <div class="mb-4">
        <label for="{{ $name }}" class="block text-sm font-medium text-gray-700">{{ $label }}</label>
        <input id="{{ $name }}" name="{{ $name }}"
               type="{{ in_array($name, ['year', 'stock']) ? 'number' : 'text' }}"
               value="{{ old($name, $book->$name ?? '') }}"
               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        <x-input-error :messages="$errors->get($name)" class="mt-1" />
    </div>
@endforeach

<div class="mb-4">
    <label for="category_id" class="block text-sm font-medium text-gray-700">Kategori</label>
    <select id="category_id" name="category_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
        <option value="">-- Pilih Kategori --</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" @selected(old('category_id', $book->category_id ?? '') == $category->id)>
                {{ $category->name }}
            </option>
        @endforeach
    </select>
    <x-input-error :messages="$errors->get('category_id')" class="mt-1" />
</div>

<div class="flex gap-2">
    <button class="px-4 py-2 bg-indigo-600 text-white rounded-md text-sm">Simpan</button>
    <a href="{{ route('books.index') }}" class="px-4 py-2 border rounded-md text-sm">Batal</a>
</div>