<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $electronics = Category::where('name', 'Electronics')->first();
        $clothing = Category::where('name', 'Clothing')->first();

        Product::create([
            'name' => 'Smartphone',
            'description' => 'A high-end smartphone with great features',
            'price' => 799.99,
            'stock' => 50,
            'category_id' => $electronics->id,
        ]);

        Product::create([
            'name' => 'T-Shirt',
            'description' => 'Comfortable cotton t-shirt',
            'price' => 19.99,
            'stock' => 100,
            'category_id' => $clothing->id,
        ]);
    }
}
