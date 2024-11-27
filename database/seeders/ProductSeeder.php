<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::statement('SET FOREIGN_KEY_CHECKS = 0'); // تعطيل قيود المفاتيح الأجنبية
        Product::truncate(); // تنفيذ أمر TRUNCATE
        DB::statement('SET FOREIGN_KEY_CHECKS = 1'); // إعادة تفعيل قيود المفاتيح الأجنبية

        $users = User::all();
        $categories = Category::all();

        $products = [
            [
                'user_id' => $users->random()->id,
                'category_id' => $categories->random()->id,
                'name' => 'Smartphone',
                'price' => '699.99',
                'slug' => Str::slug('Smartphone'),
                'description' => 'Latest smartphone with advanced features.',
                'image' => 'path/to/smartphone-image.jpg',
            ],
            [
                'user_id' => $users->random()->id,
                'category_id' => $categories->random()->id,
                'name' => 'Laptop',
                'price' => '999.99',
                'slug' => Str::slug('Laptop'),
                'description' => 'High-performance laptop for all your needs.',
                'image' => 'path/to/laptop-image.jpg',
            ],
            [
                'user_id' => $users->random()->id,
                'category_id' => $categories->random()->id,
                'name' => 'Headphones',
                'price' => '199.99',
                'slug' => Str::slug('Headphones'),
                'description' => 'Noise-cancelling headphones for immersive sound.',
                'image' => 'path/to/headphones-image.jpg',
            ],
            [
                'user_id' => $users->random()->id,
                'category_id' => $categories->random()->id,
                'name' => 'Smartwatch',
                'price' => '299.99',
                'slug' => Str::slug('Smartwatch'),
                'description' => 'Stylish smartwatch with fitness tracking.',
                'image' => 'path/to/smartwatch-image.jpg',
            ],
            [
                'user_id' => $users->random()->id,
                'category_id' => $categories->random()->id,
                'name' => 'Tablet',
                'price' => '399.99',
                'slug' => Str::slug('Tablet'),
                'description' => 'Portable tablet for work and play.',
                'image' => 'path/to/tablet-image.jpg',
            ],
        ];

        // Inserting data using Eloquent
        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
