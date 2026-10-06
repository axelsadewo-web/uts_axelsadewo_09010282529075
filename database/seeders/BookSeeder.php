<?php

namespace Database\Seeders;
use App\Models\Book;
use App\Models\Category;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $teknologi = Category::where('name', 'Teknologi')->first();
    $fiksi     = Category::where('name', 'Fiksi')->first();
    $sains     = Category::where('name', 'Sains')->first();

    $books = [
        ['category_id' => $teknologi->id, 'title' => 'Pemrograman Web dengan Laravel', 'author' => 'Budi Santoso', 'publisher' => 'Informatika', 'year' => 2022, 'stock' => 10],
        ['category_id' => $teknologi->id, 'title' => 'Dasar-Dasar Basis Data', 'author' => 'Rina Wijaya', 'publisher' => 'Andi Offset', 'year' => 2021, 'stock' => 7],
        ['category_id' => $fiksi->id, 'title' => 'Laskar Pelangi', 'author' => 'Andrea Hirata', 'publisher' => 'Bentang Pustaka', 'year' => 2005, 'stock' => 5],
        ['category_id' => $fiksi->id, 'title' => 'Bumi', 'author' => 'Tere Liye', 'publisher' => 'Gramedia', 'year' => 2014, 'stock' => 8],
        ['category_id' => $sains->id, 'title' => 'Sejarah Singkat Waktu', 'author' => 'Stephen Hawking', 'publisher' => 'Gramedia', 'year' => 2018, 'stock' => 4],
    ];

    foreach ($books as $book) {
        Book::create($book);
    }
}
}
