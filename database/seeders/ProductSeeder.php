<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('products')->insert([
            'name' => 'MacBook Pro',
            'detail' => 'Laptop MacBook Pro'
        ]);
        \DB::table('products')->insert([
            'name' => 'Lenovo Yoga',
            'detail' => 'Laptop Lenovo Yoga'
        ]);
    }
}
