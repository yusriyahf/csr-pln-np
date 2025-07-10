<?php 

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProposalProsesChecklistSeeder extends Seeder
{
    public function run(): void
    {
        // Checklist untuk Proposal ID 1 (Pembangunan Sekolah - sudah 75% progress)
        DB::table('proposal_proses_checklist')->insert([
            [
                'proposal_id' => 1,
                'sub_proses_id' => 1, // Verifikasi Dokumen Pendidikan
                'is_checked' => true,
                'checked_at' => '2024-06-16 10:00:00',
                'updated_at' => now(),
            ],
            [
                'proposal_id' => 1,
                'sub_proses_id' => 2, // Evaluasi Kurikulum
                'is_checked' => true,
                'checked_at' => '2024-06-20 14:30:00',
                'updated_at' => now(),
            ],
            [
                'proposal_id' => 1,
                'sub_proses_id' => 3, // Penilaian Dampak Sosial
                'is_checked' => true,
                'checked_at' => '2024-06-25 09:15:00',
                'updated_at' => now(),
            ],
            [
                'proposal_id' => 1,
                'sub_proses_id' => 4, // Persetujuan Anggaran
                'is_checked' => false,
                'checked_at' => null,
                'updated_at' => now(),
            ],
        ]);

        // Checklist untuk Proposal ID 2 (Posyandu - 25% progress)
        DB::table('proposal_proses_checklist')->insert([
            [
                'proposal_id' => 2,
                'sub_proses_id' => 5, // Verifikasi Izin Kesehatan
                'is_checked' => true,
                'checked_at' => '2024-07-02 11:00:00',
                'updated_at' => now(),
            ],
            [
                'proposal_id' => 2,
                'sub_proses_id' => 6, // Evaluasi Tenaga Medis
                'is_checked' => false,
                'checked_at' => null,
                'updated_at' => now(),
            ],
            [
                'proposal_id' => 2,
                'sub_proses_id' => 7, // Penilaian Fasilitas
                'is_checked' => false,
                'checked_at' => null,
                'updated_at' => now(),
            ],
            [
                'proposal_id' => 2,
                'sub_proses_id' => 8, // Persetujuan Anggaran
                'is_checked' => false,
                'checked_at' => null,
                'updated_at' => now(),
            ],
        ]);

        // Checklist untuk Proposal ID 3 (UMKM - 90% progress)
        DB::table('proposal_proses_checklist')->insert([
            [
                'proposal_id' => 3,
                'sub_proses_id' => 9, // Verifikasi Legalitas Usaha
                'is_checked' => true,
                'checked_at' => '2024-06-21 13:00:00',
                'updated_at' => now(),
            ],
            [
                'proposal_id' => 3,
                'sub_proses_id' => 10, // Evaluasi Rencana Bisnis
                'is_checked' => true,
                'checked_at' => '2024-06-25 16:30:00',
                'updated_at' => now(),
            ],
            [
                'proposal_id' => 3,
                'sub_proses_id' => 11, // Penilaian Kelayakan Finansial
                'is_checked' => true,
                'checked_at' => '2024-07-01 10:15:00',
                'updated_at' => now(),
            ],
            [
                'proposal_id' => 3,
                'sub_proses_id' => 12, // Persetujuan Anggaran
                'is_checked' => true,
                'checked_at' => '2024-07-05 14:45:00',
                'updated_at' => now(),
            ],
        ]);
    }
}
