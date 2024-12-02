<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Papel higienico',
            'description' => 'Papel de 500 hojas',
            'price' => 35.50
        ]);
        DB::table('products')->insert([
            'name' => 'Lapiz',
            'description' => 'Lapiz de cera',
            'price' => 12.00
        ]);
        DB::table('products')->insert([
            'name' => 'Hoja de maquina',
            'description' => 'Paquete de 100 hojas',
            'price' => 50
        ]);
        DB::table('products')->insert([
            'name' => 'Cepillo',
            'description' => 'Cepillo para cabello',
            'price' => 22
        ]);
        DB::table('products')->insert([
            'name' => 'USB',
            'description' => 'USB con musica',
            'price' => 250
        ]);
    }
}
