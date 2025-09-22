<?php


namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ItemSeeder extends Seeder
{
public function run()
{
DB::table('items')->insert([
['name' => 'Item A', 'description' => 'Contoh item A', 'created_at' => now(), 'updated_at' => now()],
['name' => 'Item B', 'description' => 'Contoh item B', 'created_at' => now(), 'updated_at' => now()],
['name' => 'Item C', 'description' => 'Contoh item C', 'created_at' => now(), 'updated_at' => now()],
]);
}
}