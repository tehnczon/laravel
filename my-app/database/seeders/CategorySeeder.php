<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

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
            Category::create($category);
        }
    }
}