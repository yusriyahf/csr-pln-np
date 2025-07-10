<?php 

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubProsesSeeder extends Seeder
{
    public function run(): void
    {
        // Sub proses untuk Proposal Pendidikan (tipe_proses_id = 1)
        DB::table('sub_proses')->insert([
            [
                'tipe_proses_id' => 1,
                'nama_sub' => 'Verifikasi Dokumen Pendidikan',
                'order_index' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tipe_proses_id' => 1,
                'nama_sub' => 'Evaluasi Kurikulum',
                'order_index' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tipe_proses_id' => 1,
                'nama_sub' => 'Penilaian Dampak Sosial',
                'order_index' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tipe_proses_id' => 1,
                'nama_sub' => 'Persetujuan Anggaran',
                'order_index' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Sub proses untuk Proposal Kesehatan (tipe_proses_id = 2)
        DB::table('sub_proses')->insert([
            [
                'tipe_proses_id' => 2,
                'nama_sub' => 'Verifikasi Izin Kesehatan',
                'order_index' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tipe_proses_id' => 2,
                'nama_sub' => 'Evaluasi Tenaga Medis',
                'order_index' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tipe_proses_id' => 2,
                'nama_sub' => 'Penilaian Fasilitas',
                'order_index' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tipe_proses_id' => 2,
                'nama_sub' => 'Persetujuan Anggaran',
                'order_index' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Sub proses untuk Proposal Ekonomi (tipe_proses_id = 3)
        DB::table('sub_proses')->insert([
            [
                'tipe_proses_id' => 3,
                'nama_sub' => 'Verifikasi Legalitas Usaha',
                'order_index' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tipe_proses_id' => 3,
                'nama_sub' => 'Evaluasi Rencana Bisnis',
                'order_index' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tipe_proses_id' => 3,
                'nama_sub' => 'Penilaian Kelayakan Finansial',
                'order_index' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tipe_proses_id' => 3,
                'nama_sub' => 'Persetujuan Anggaran',
                'order_index' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Sub proses untuk Proposal Infrastruktur (tipe_proses_id = 4)
        DB::table('sub_proses')->insert([
            [
                'tipe_proses_id' => 4,
                'nama_sub' => 'Verifikasi Izin Pembangunan',
                'order_index' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tipe_proses_id' => 4,
                'nama_sub' => 'Evaluasi Dampak Lingkungan',
                'order_index' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tipe_proses_id' => 4,
                'nama_sub' => 'Penilaian Teknis',
                'order_index' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tipe_proses_id' => 4,
                'nama_sub' => 'Persetujuan Anggaran',
                'order_index' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
