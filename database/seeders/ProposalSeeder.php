<?php 

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProposalSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('proposal')->insert([
            [
                'judul' => 'Pembangunan Sekolah Dasar di Desa Makmur',
                'instansi_pengajuan' => 'Yayasan Pendidikan Nusantara',
                'lokasi' => 'Desa Makmur, Kecamatan Sejahtera, Kabupaten Maju',
                'tanggal_disposisi' => '2024-06-15',
                'nominal_pengajuan' => 500000000,
                'barang_pengajuan' => 'Bangunan sekolah 6 ruang kelas, perpustakaan, laboratorium',
                'tipologi_id' => 1, // Pendidikan
                'status' => 'disetujui',
                'nominal_disetujui' => 450000000,
                'barang_disetujui' => 'Bangunan sekolah 6 ruang kelas, perpustakaan',
                'nama_pic_id' => 2, // Budi Santoso
                'tipe_proses_id' => 1, // Proposal Pendidikan
                'keterangan' => 'Proposal disetujui dengan pengurangan untuk laboratorium',
                'overdue' => '2024-12-31',
                'progress' => 75,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Program Posyandu Keliling untuk Daerah Terpencil',
                'instansi_pengajuan' => 'Puskesmas Kecamatan Terpencil',
                'lokasi' => 'Kecamatan Terpencil, Kabupaten Pedalaman',
                'tanggal_disposisi' => '2024-07-01',
                'nominal_pengajuan' => 200000000,
                'barang_pengajuan' => 'Mobil ambulans, peralatan medis, obat-obatan',
                'tipologi_id' => 2, // Kesehatan
                'status' => 'pending',
                'nominal_disetujui' => null,
                'barang_disetujui' => null,
                'nama_pic_id' => 3, // Siti Rahayu
                'tipe_proses_id' => 2, // Proposal Kesehatan
                'keterangan' => 'Sedang dalam proses evaluasi',
                'overdue' => '2024-08-15',
                'progress' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Pelatihan Keterampilan UMKM untuk Ibu-ibu PKK',
                'instansi_pengajuan' => 'Koperasi Wanita Mandiri',
                'lokasi' => 'Kelurahan Sejahtera, Kecamatan Maju, Kota Berkembang',
                'tanggal_disposisi' => '2024-06-20',
                'nominal_pengajuan' => 150000000,
                'barang_pengajuan' => 'Peralatan menjahit, mesin bordir, bahan baku',
                'tipologi_id' => 3, // Ekonomi
                'status' => 'disetujui',
                'nominal_disetujui' => 150000000,
                'barang_disetujui' => 'Peralatan menjahit, mesin bordir, bahan baku',
                'nama_pic_id' => 5, // Dewi Lestari
                'tipe_proses_id' => 3, // Proposal Ekonomi
                'keterangan' => 'Proposal disetujui sepenuhnya',
                'overdue' => '2024-10-31',
                'progress' => 90,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Pembangunan Jembatan Penghubung Antar Desa',
                'instansi_pengajuan' => 'Dinas Pekerjaan Umum Kabupaten',
                'lokasi' => 'Desa A - Desa B, Kecamatan Terpencil',
                'tanggal_disposisi' => '2024-07-10',
                'nominal_pengajuan' => 800000000,
                'barang_pengajuan' => 'Jembatan beton panjang 50m, lebar 4m',
                'tipologi_id' => 5, // Infrastruktur
                'status' => 'ditolak',
                'nominal_disetujui' => 0,
                'barang_disetujui' => null,
                'nama_pic_id' => 2, // Budi Santoso
                'tipe_proses_id' => 4, // Proposal Infrastruktur
                'keterangan' => 'Ditolak karena tidak memenuhi syarat teknis',
                'overdue' => null,
                'progress' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Program Bantuan Sembako untuk Lansia',
                'instansi_pengajuan' => 'Karang Taruna Peduli',
                'lokasi' => 'Kelurahan Harmoni, Kecamatan Bahagia',
                'tanggal_disposisi' => '2024-07-05',
                'nominal_pengajuan' => 100000000,
                'barang_pengajuan' => 'Paket sembako bulanan untuk 200 lansia',
                'tipologi_id' => 6, // Sosial
                'status' => 'pending',
                'nominal_disetujui' => null,
                'barang_disetujui' => null,
                'nama_pic_id' => 3, // Siti Rahayu
                'tipe_proses_id' => 1, // Proposal Pendidikan (contoh)
                'keterangan' => 'Sedang menunggu verifikasi data penerima',
                'overdue' => '2024-08-20',
                'progress' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
