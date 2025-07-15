<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class ArtikelBeritaSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $i) {
            DB::table('artikel_berita')->insert([
                'judul' => $faker->sentence,
                'konten_berita' => $faker->paragraph,
                'gambar' => 'https://picsum.photos/seed/' . $i . '/600/400',
                'id_admin' => $faker->numberBetween(1, 50),
                'id_kategori' => $faker->numberBetween(1, 3), // hanya kategori 1-3
                'status' => $faker->randomElement(['draft', 'published']),
                'tanggal_pembuatan' => Carbon::now()->subDays(rand(0, 30)),
            ]);
        }
    }
}
