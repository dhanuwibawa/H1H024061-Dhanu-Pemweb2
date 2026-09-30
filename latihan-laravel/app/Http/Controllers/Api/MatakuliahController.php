<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMatakuliahRequest;
use App\Http\Requests\UpdateMatakuliahRequest;
use App\Http\Resources\MatakuliahResource;
use App\Models\Matakuliah;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    /**
     * Menampilkan semua data matakuliah.
     */
    public function index(Request $request)
    {
        $perHalaman = min(
            $request->integer('per_halaman', 10),
            100
        );

        $matakuliah = Matakuliah::query()
            ->orderBy('kode')
            ->paginate($perHalaman);

        return MatakuliahResource::collection($matakuliah);
    }

    /**
     * Menyimpan matakuliah baru.
     */
    public function store(StoreMatakuliahRequest $request)
    {
        $matakuliah = Matakuliah::create(
            $request->validated()
        );

        return (new MatakuliahResource($matakuliah))
            ->additional([
                'sukses' => true,
                'pesan' => 'Data matakuliah berhasil dibuat',
            ])
            ->response()
            ->setStatusCode(201);
    }

    /**
     * Menampilkan satu matakuliah.
     */
    public function show(Matakuliah $matakuliah)
    {
        return new MatakuliahResource($matakuliah);
    }

    /**
     * Mengubah data matakuliah.
     */
    public function update(
        UpdateMatakuliahRequest $request,
        Matakuliah $matakuliah
    ) {
        $matakuliah->update(
            $request->validated()
        );

        return (new MatakuliahResource($matakuliah))
            ->additional([
                'sukses' => true,
                'pesan' => 'Data matakuliah berhasil diperbarui',
            ]);
    }

    /**
     * Menghapus matakuliah.
     */
    public function destroy(Matakuliah $matakuliah)
    {
        $matakuliah->delete();

        return response()->json([
            'sukses' => true,
            'pesan' => 'Data matakuliah berhasil dihapus',
        ]);
    }
}