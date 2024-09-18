<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $categories = [
            ['slug' => 'electronics', 'name' => 'Electronics'],
            ['slug' => 'furniture', 'name' => 'Furniture'],
            ['slug' => 'clothing', 'name' => 'Clothing'],
            ['slug' => 'books', 'name' => 'Books'],
            ['slug' => 'toys', 'name' => 'Toys'],
        ];

        DB::table('categories')->insert($categories);
    }
}
