<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Categoria;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $fecha = Carbon::now();

        $categorias = [
            [
                'nombre' => 'Cliente',
                'created_at' => $fecha,
                'updated_at' => $fecha,
            ],
            [
                'nombre' => 'Proveedor',
                'created_at' => $fecha,
                'updated_at' => $fecha,
            ],
            [
                'nombre' => 'Funcionario Interno',
                'created_at' => $fecha,
                'updated_at' => $fecha,
            ],
        ];

        Categoria::query()->insert($categorias);
    }
}
