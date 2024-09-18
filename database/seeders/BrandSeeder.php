<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $brands = [
            ['slug' => 'brand-one', 'name' => 'Brand One'],
            ['slug' => 'brand-two', 'name' => 'Brand Two'],
            ['slug' => 'brand-three', 'name' => 'Brand Three'],
            ['slug' => 'brand-four', 'name' => 'Brand Four'],
            ['slug' => 'brand-five', 'name' => 'Brand Five'],
        ];

        DB::table('brands')->insert($brands);
    }
}
