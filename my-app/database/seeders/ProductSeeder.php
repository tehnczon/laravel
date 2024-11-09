<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Product 1',
                'description' => 'Description for product 1',
                'price' => 100.00,
            ],
            [
                'name' => 'Product 2',
                'description' => 'Description for product 2',
                'price' => 200.00,
            ],
            [
                'name' => 'Product 3',
                'description' => 'Description for product 3',
                'price' => 300.00,
            ],
        ];

        foreach ($products as $product) {
            $productModel = Product::create($product);
        }
    }
}