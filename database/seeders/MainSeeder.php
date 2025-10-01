<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MainSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Buat User Admin
        User::create([
            'name' => 'Admin DigiRent',
            'email' => 'admin@digirent.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        // 2. Buat Kategori dan simpan dalam variabel
        $handphone = Category::create(['name' => 'Handphone', 'slug' => 'handphone']);
        $laptop = Category::create(['name' => 'Laptop', 'slug' => 'laptop']);
        $tablet = Category::create(['name' => 'Tablet', 'slug' => 'tablet']);

        // 3. Buat Produk menggunakan variabel kategori di atas
        Product::create([
            'category_id' => $handphone->id,
            'name' => 'iPhone 15 Pro Max',
            'slug' => Str::slug('iPhone 15 Pro Max'),
            'description' => 'Rasakan kekuatan chip A17 Pro...',
            'price_per_day' => 250000,
            'stock' => 5,
            'image' => 'products/iphone-15-pro-max.jpeg', // <-- PASTIKAN SAMA PERSIS
        ]);

        Product::create([
            'category_id' => $laptop->id, // Menggunakan ID dari variabel $laptop
            'name' => 'MacBook Pro 14" M3',
            'slug' => Str::slug('MacBook Pro 14 M3'),
            'description' => 'Supercharged by M3 chip, MacBook Pro adalah laptop pro terbaik untuk alur kerja yang berat.',
            'price_per_day' => 350000,
            'stock' => 3,
            'image' => 'products/macbook.jpg',
        ]);

        Product::create([
            'category_id' => $handphone->id, // Menggunakan ID dari variabel $handphone
            'name' => 'Samsung Galaxy S24 Ultra',
            'slug' => Str::slug('Samsung Galaxy S24 Ultra'),
            'description' => 'Dilengkapi dengan Galaxy AI, S Pen, dan kamera Nightography yang luar biasa.',
            'price_per_day' => 240000,
            'stock' => 4,
            'image' => 'products/samsungs24ultra.jpeg',
        ]);

        Product::create([
            'category_id' => $tablet->id, // Menggunakan ID dari variabel $tablet
            'name' => 'iPad Pro 11" M2',
            'slug' => Str::slug('iPad Pro 11 M2'),
            'description' => 'Pengalaman iPad terbaik dengan performa M2 yang menakjubkan dan layar Liquid Retina XDR.',
            'price_per_day' => 200000,
            'stock' => 7,
            'image' => 'products/ipad.jpg',
        ]);
    }
}
