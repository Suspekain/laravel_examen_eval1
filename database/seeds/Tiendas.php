<?php

use Illuminate\Database\Seeder;

class Tiendas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('tiendas')->insert(
            [
                'id'=>1,
                'nombre'=>'Zara',
                'descripcion'=>'Arropa denda',
                'contraseña'=>'zara1234',
                'email'=>'help@zara.com',
                'likes'=>100
            ]
        );
        DB::table('tiendas')->insert(
            [
                'id'=>2,
                'nombre'=>'MediaMarkt',
                'descripcion'=>'Teknologia denda',
                'contraseña'=>'media1234',
                'email'=>'help@media.com',
                'likes'=>200
                ]
            );
            DB::table('tiendas')->insert(
                [
                    'id'=>3,
                    'nombre'=>'Aldi',
                    'descripcion'=>'Merkatu denda',
                    'contraseña'=>'aldi1234',
                    'email'=>'help@aldi.com',
                    'likes'=>5000
                ]
            );
    }
}
