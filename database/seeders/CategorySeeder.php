<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0'); // تعطيل قيود المفاتيح الأجنبية
    Category::truncate(); // تنفيذ أمر TRUNCATE
        DB::statement('SET FOREIGN_KEY_CHECKS = 1'); // إعادة تفعيل قيود المفاتيح الأجنبية

        $categories = [
        [
            'parent_id' => null,
            'name' => 'Books',
            'slug' => 'books',
            'description' => 'Various genres of books',
            'image' => 'path/to/books-image.jpg',
            'status' => 'active',
        ],
            [
                'parent_id' => 1, // Assuming Electronics is the first category
                'name' => 'Mobile Phones',
                'slug' => 'mobile-phones',
                'description' => 'Latest mobile phones',
                'image' => 'path/to/mobile-phones-image.jpg',
                'status' => 'active',
            ],
            [
                'parent_id' => 2, // Assuming Books is the second category
                'name' => 'Fiction',
                'slug' => 'fiction',
                'description' => 'Fictional books',
                'image' => 'path/to/fiction-image.jpg',
                'status' => 'active',
            ],
            [
                'parent_id' => null,
                'name' => 'Fashion',
                'slug' => 'fashion',
                'description' => 'Clothing and accessories',
                'image' => 'path/to/fashion-image.jpg',
                'status' => 'archived',
            ],
        ];

        // Inserting data using Eloquent
        foreach ($categories as $category) {
            Category::create($category);
        }

    }
}
