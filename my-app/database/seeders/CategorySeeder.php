<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class CategorySeeder extends Seeder
{
    public function run(): void
    {
        // Define an array of categories
        $categories = [
            ['name' => 'Electronics'],
            ['name' => 'Furniture'],
            ['name' => 'Books'],
            ['name' => 'Clothing'],
            ['name' => 'Health & Beauty'],
        ];

        // Insert each category into the database
        foreach ($categories as $category) {
            \App\Models\category::create($category);
        }
    }
}