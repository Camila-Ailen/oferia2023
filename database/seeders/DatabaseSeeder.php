<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Storage::deleteDirectory('categories');
        Storage::makeDirectory('categories');

        Storage::deleteDirectory('subcategories');
        Storage::makeDirectory('subcategories');

        Storage::deleteDirectory('products');
        Storage::makeDirectory('products');

        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(SubcategorySeeder::class);
        $this->call(UnitSeeder::class);
        $this->call(ProductSeeder::class);
    }
}
