<?php 

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipeProsesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tipe_proses')->insert([
            [
                'nama' => 'Proposal Pendidikan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Proposal Kesehatan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Proposal Ekonomi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Proposal Infrastruktur',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}