<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function index(Request $request)
    {
        $daftarMatakuliah = [
            [
                'kode' => 'IF101',
                'nama' => 'Pemrograman Web II',
                'sks' => 3
            ],
            [
                'kode' => 'IF102',
                'nama' => 'Basis Data',
                'sks' => 3
            ],
            [
                'kode' => 'IF103',
                'nama' => 'Jaringan Komputer',
                'sks' => 2
            ],
            [
                'kode' => 'IF104',
                'nama' => 'Sistem Operasi',
                'sks' => 2
            ],
            [
                'kode' => 'IF105',
                'nama' => 'Kecerdasan Buatan',
                'sks' => 3
            ],
        ];

        $kataKunci = $request->query('q', '');

        if ($kataKunci !== '') {
            $daftarMatakuliah = array_filter(
                $daftarMatakuliah,
                function ($matakuliah) use ($kataKunci) {
                    return stripos($matakuliah['kode'], $kataKunci) !== false
                        || stripos($matakuliah['nama'], $kataKunci) !== false;
                }
            );
        }

        return view('matakuliah.index', [
            'daftarMatakuliah' => $daftarMatakuliah,
            'kataKunci' => $kataKunci
        ]);
    }

    public function show(string $kode)
    {
        $daftarMatakuliah = [
            [
                'kode' => 'IF101',
                'nama' => 'Pemrograman Web II',
                'sks' => 3
            ],
            [
                'kode' => 'IF102',
                'nama' => 'Basis Data',
                'sks' => 3
            ],
            [
                'kode' => 'IF103',
                'nama' => 'Jaringan Komputer',
                'sks' => 2
            ],
            [
                'kode' => 'IF104',
                'nama' => 'Sistem Operasi',
                'sks' => 2
            ],
            [
                'kode' => 'IF105',
                'nama' => 'Kecerdasan Buatan',
                'sks' => 3
            ],
        ];

        $matakuliah = null;

        foreach ($daftarMatakuliah as $item) {
            if ($item['kode'] === $kode) {
                $matakuliah = $item;
                break;
            }
        }

        if ($matakuliah === null) {
            abort(404);
        }

        return view('matakuliah.show', [
            'matakuliah' => $matakuliah
        ]);
    }
}