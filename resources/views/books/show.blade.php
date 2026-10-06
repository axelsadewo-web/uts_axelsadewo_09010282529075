<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Detail Buku</h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6">
                <table class="w-full text-sm">
                    <tr class="border-b"><th class="p-2 text-left w-40">Judul</th><td class="p-2">{{ $book->title }}</td></tr>
                    <tr class="border-b"><th class="p-2 text-left">Penulis</th><td class="p-2">{{ $book->author }}</td></tr>
                    <tr class="border-b"><th class="p-2 text-left">Penerbit</th><td class="p-2">{{ $book->publisher }}</td></tr>
                    <tr class="border-b"><th class="p-2 text-left">Tahun Terbit</th><td class="p-2">{{ $book->year }}</td></tr>
                    <tr class="border-b"><th class="p-2 text-left">Stok</th><td class="p-2">{{ $book->stock }}</td></tr>
                    <tr class="border-b"><th class="p-2 text-left">Kategori</th><td class="p-2">{{ $book->category->name }}</td></tr>
                    <tr><th class="p-2 text-left">Deskripsi Kategori</th><td class="p-2">{{ $book->category->description }}</td></tr>
                </table>

                <div class="mt-4 flex gap-2">
                    <a href="{{ route('books.edit', $book) }}" class="px-4 py-2 bg-yellow-500 text-white rounded-md text-sm">Edit</a>
                    <a href="{{ route('books.index') }}" class="px-4 py-2 border rounded-md text-sm">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>