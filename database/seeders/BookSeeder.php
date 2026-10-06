<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $categories = Category::pluck('id', 'name');

        $books = [
            // Teknologi
            ['Teknologi', 'Pemrograman Web dengan Laravel', 'Budi Santoso', 'Informatika', 2022, 10],
            ['Teknologi', 'Dasar-Dasar Basis Data', 'Rina Wijaya', 'Andi Offset', 2021, 7],
            ['Teknologi', 'Algoritma dan Struktur Data', 'Rinaldi Munir', 'Informatika', 2020, 6],
            ['Teknologi', 'Belajar PHP dan MySQL', 'Eko Kurniawan', 'Elex Media', 2019, 9],
            ['Teknologi', 'Jaringan Komputer untuk Pemula', 'Dedi Hermawan', 'Andi Offset', 2018, 5],
            ['Teknologi', 'Rekayasa Perangkat Lunak', 'Roger Pressman', 'Andi Offset', 2015, 4],
            ['Teknologi', 'Pemrograman Python Dasar', 'Anton Setiawan', 'Informatika', 2023, 12],

            // Fiksi
            ['Fiksi', 'Laskar Pelangi', 'Andrea Hirata', 'Bentang Pustaka', 2005, 5],
            ['Fiksi', 'Bumi', 'Tere Liye', 'Gramedia', 2014, 8],
            ['Fiksi', 'Negeri 5 Menara', 'Ahmad Fuadi', 'Gramedia', 2009, 6],
            ['Fiksi', 'Bulan', 'Tere Liye', 'Gramedia', 2015, 7],
            ['Fiksi', 'Pulang', 'Leila S. Chudori', 'KPG', 2012, 4],
            ['Fiksi', 'Dilan 1990', 'Pidi Baiq', 'Pastel Books', 2014, 11],
            ['Fiksi', 'Ayat-Ayat Cinta', 'Habiburrahman El Shirazy', 'Republika', 2004, 5],

            // Sains
            ['Sains', 'Sejarah Singkat Waktu', 'Stephen Hawking', 'Gramedia', 2018, 4],
            ['Sains', 'Sapiens', 'Yuval Noah Harari', 'KPG', 2017, 6],
            ['Sains', 'Kosmos', 'Carl Sagan', 'Gramedia', 2016, 3],
            ['Sains', 'Fisika Dasar', 'Halliday', 'Erlangga', 2014, 8],
            ['Sains', 'Biologi Sel dan Molekuler', 'Campbell', 'Erlangga', 2013, 5],
            ['Sains', 'Kimia Dasar', 'Raymond Chang', 'Erlangga', 2012, 6],
        ];

        foreach ($books as [$category, $title, $author, $publisher, $year, $stock]) {
            Book::create([
                'category_id' => $categories[$category],
                'title'       => $title,
                'author'      => $author,
                'publisher'   => $publisher,
                'year'        => $year,
                'stock'       => $stock,
            ]);
        }
    }
}