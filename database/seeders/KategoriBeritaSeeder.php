<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriBeritaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('kategori_berita')->insert([
            ['nama_kategori' => 'Teknologi', 'deskripsi' => 'Berita seputar dunia teknologi'],
            ['nama_kategori' => 'Olahraga', 'deskripsi' => 'Berita tentang dunia olahraga'],
            ['nama_kategori' => 'Pendidikan', 'deskripsi' => 'Info pendidikan terkini'],
        ]);
    }
}
