<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name'  => 'Clothes',
                'image' => 'https://dummyimage.com/200x150/5c5756/fff',
            ], [
                'name'  => 'Shoes',
                'image' => 'https://dummyimage.com/200x150/5c5756/fff',
            ], [
                'name'  => 'Cellphones',
                'image' => 'https://dummyimage.com/200x150/5c5756/fff',
            ], [
                'name'  => 'Computers',
                'image' => 'https://dummyimage.com/200x150/5c5756/fff',
            ]
        ];

        collect($categories)
            ->each(function ($category) {
                Category::create($category);
            });
    }
}
