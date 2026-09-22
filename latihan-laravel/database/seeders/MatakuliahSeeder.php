<?php

namespace Database\Seeders;

use App\Models\Matakuliah;
use Illuminate\Database\Seeder;

class MatakuliahSeeder extends Seeder
{
    public function run(): void
    {
        $daftar = [
            [
                'kode' => 'TK101',
                'nama' => 'Pemrograman Web',
                'sks' => 3,
                'semester' => 1,
            ],
            [
                'kode' => 'TK102',
                'nama' => 'Basis Data',
                'sks' => 3,
                'semester' => 2,
            ],
            [
                'kode' => 'TK103',
                'nama' => 'Pemrograman Berorientasi Objek',
                'sks' => 3,
                'semester' => 2,
            ],
            [
                'kode' => 'TK201',
                'nama' => 'Jaringan Komputer',
                'sks' => 3,
                'semester' => 3,
            ],
            [
                'kode' => 'TK202',
                'nama' => 'Sistem Operasi',
                'sks' => 3,
                'semester' => 3,
            ],
            [
                'kode' => 'TK301',
                'nama' => 'Internet of Things',
                'sks' => 3,
                'semester' => 4,
            ],
            [
                'kode' => 'TK302',
                'nama' => 'Keamanan Komputer',
                'sks' => 3,
                'semester' => 4,
            ],
            [
                'kode' => 'TK401',
                'nama' => 'Kecerdasan Buatan',
                'sks' => 3,
                'semester' => 5,
            ],
        ];

        foreach ($daftar as $item) {
            Matakuliah::create($item);
        }
    }
}