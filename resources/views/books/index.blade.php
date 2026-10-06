<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Daftar Buku</h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6">

                @if (session('success'))
                    <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">{{ session('success') }}</div>
                @endif

                <div class="flex flex-wrap items-center justify-between gap-3 mb-4">
                    <form method="GET" action="{{ route('books.index') }}" class="flex flex-wrap gap-2">
                        <input type="text" name="search" value="{{ request('search') }}"
                               placeholder="Cari judul / penulis"
                               class="border-gray-300 rounded-md shadow-sm text-sm">
                        <select name="category_id" class="border-gray-300 rounded-md shadow-sm text-sm">
                            <option value="">Semua Kategori</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @selected(request('category_id') == $category->id)>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        <button class="px-4 py-2 bg-gray-800 text-white rounded-md text-sm">Cari</button>
                        <a href="{{ route('books.index') }}" class="px-4 py-2 border rounded-md text-sm">Reset</a>
                    </form>

                    <a href="{{ route('books.create') }}"
                       class="px-4 py-2 bg-indigo-600 text-white rounded-md text-sm">+ Tambah Buku</a>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full text-sm text-left">
                        <thead class="bg-gray-100 text-gray-700">
                            <tr>
                                <th class="p-3">No</th>
                                <th class="p-3">Judul</th>
                                <th class="p-3">Penulis</th>
                                <th class="p-3">Kategori</th>
                                <th class="p-3">Tahun</th>
                                <th class="p-3">Stok</th>
                                <th class="p-3">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($books as $book)
                                <tr class="border-b">
                                    <td class="p-3">{{ $books->firstItem() + $loop->index }}</td>
                                    <td class="p-3">{{ $book->title }}</td>
                                    <td class="p-3">{{ $book->author }}</td>
                                    <td class="p-3">{{ $book->category->name }}</td>
                                    <td class="p-3">{{ $book->year }}</td>
                                    <td class="p-3">{{ $book->stock }}</td>
                                    <td class="p-3 whitespace-nowrap">
                                        <a href="{{ route('books.show', $book) }}" class="text-blue-600">Detail</a> |
                                        <a href="{{ route('books.edit', $book) }}" class="text-yellow-600">Edit</a> |
                                        <form action="{{ route('books.destroy', $book) }}" method="POST" class="inline"
                                              onsubmit="return confirm('Yakin hapus buku ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="text-red-600">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr><td colspan="7" class="p-4 text-center text-gray-500">Data buku tidak ditemukan.</td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="mt-4">{{ $books->links() }}</div>
            </div>
        </div>
    </div>
</x-app-layout>