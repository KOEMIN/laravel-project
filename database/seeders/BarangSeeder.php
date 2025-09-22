<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run()
    {
        $data = [];
        for ($i = 1; $i <= 10; $i++) {
            $data[] = [
                'nama' => 'Barang ' . $i,
                'stok' => rand(1, 100),
                'harga' => rand(10000, 100000),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('barang')->insert($data);
    }
}
