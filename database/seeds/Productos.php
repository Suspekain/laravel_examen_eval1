<?php

use Illuminate\Database\Seeder;

class Productos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        for ($i=1; $i <= 10; $i++) { 
            DB::table('productos')->insert(
                [
                    'id'=>$i,
                    'nombre'=>Str::random(20),
                    'descripcion'=>Str::random(100),
                    'stock'=>rand(0,999),
                    'precio'=>rand(0,500)
                    ]
                );
        }
    }
}
