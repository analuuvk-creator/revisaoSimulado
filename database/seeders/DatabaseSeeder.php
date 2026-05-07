<?php

namespace Database\Seeders;

use App\Models\Produto;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Admin',
            'email' => 'admin@senai.com',
            'password' => Hash::make('123')
        ]);

        Produto::create([
            'name' => 'Martelo',
            'valor' => 50.00,
            'qtd_estoque' => 100,
            'qtd_minima' => 10
        ]);

        Produto::create([
            'name' => 'Chave Inglesa',
            'valor' => 30.00,
            'qtd_estoque' => 10,
            'qtd_minima' => 10
        ]);

        Produto::create([
            'name' => 'Serrote Universal',
            'valor' => 150.00,
            'qtd_estoque' => 5,
            'qtd_minima' => 10
        ]);
    }
}
