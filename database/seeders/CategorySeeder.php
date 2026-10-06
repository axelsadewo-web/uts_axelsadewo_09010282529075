<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Teknologi', 'description' => 'Buku seputar pemrograman, komputer, dan teknologi informasi.'],
            ['name' => 'Fiksi', 'description' => 'Novel dan cerita fiksi.'],
            ['name' => 'Sains', 'description' => 'Buku ilmu pengetahuan alam dan penelitian.'],
        ];

        foreach ($categories as $category) {
        Category::create($category);
        }
    }
}
