<?php 

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipologiSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tipologi')->insert([
            [
                'kode' => 'EDU-001',
                'deskripsi' => 'Pendidikan dan Beasiswa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 'KES-001',
                'deskripsi' => 'Kesehatan Masyarakat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 'ECO-001',
                'deskripsi' => 'Pemberdayaan Ekonomi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 'ENV-001',
                'deskripsi' => 'Lingkungan dan Konservasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 'INF-001',
                'deskripsi' => 'Infrastruktur dan Teknologi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode' => 'SOC-001',
                'deskripsi' => 'Sosial dan Kemanusiaan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}