<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use Illuminate\Database\Seeder;

class MahasiswaMatakuliahSeeder extends Seeder
{
    public function run(): void
    {
        $mahasiswas = Mahasiswa::all();
        $matakuliahs = Matakuliah::all();

        foreach ($mahasiswas as $mahasiswa) {
            $pilihan = $matakuliahs->random(4);

            foreach ($pilihan as $matakuliah) {
                $mahasiswa->matakuliah()->attach(
                    $matakuliah->id,
                    [
                        'nilai' => fake()->randomElement([
                            'A',
                            'AB',
                            'B',
                            'BC',
                            'C'
                        ])
                    ]
                );
            }
        }
    }
}