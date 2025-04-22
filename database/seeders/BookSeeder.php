<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Filosofi Teras',
            'author' => 'Henry Manampiring',
            'published_year' => 2018
        ]);

        Book::create([
            'title' => 'Atomic Habits',
            'author' => 'James Clear',
            'published_year' => 2019
        ]);

        Book::create([
            'title' => 'Laskar Pelangi',
            'author' => 'Andrea Hirata',
            'published_year' => 2005
        ]);
    }
}
