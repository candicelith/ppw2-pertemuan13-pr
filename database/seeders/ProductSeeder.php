<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Ultraviolence Vinyl',
            'price' => 10000
        ]);

        Product::create([
            'name' => 'Starboy Vinyl',
            'price' => 20000
        ]);

        Product::create([
            'name' => 'Wiped Out! Vinyl',
            'price' => 30000
        ]);
    }
}
