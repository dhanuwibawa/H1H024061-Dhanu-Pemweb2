@extends('layouts.app')

@section('judul', 'Detail Mahasiswa')

@section('konten')

<h1 class="h3 mb-4">Detail Mahasiswa</h1>

<div class="mb-4">
    <p>
        <strong>NIM:</strong>
        {{ $mahasiswa->nim }}
    </p>

    <p>
        <strong>Nama:</strong>
        {{ $mahasiswa->nama }}
    </p>

    <p>
        <strong>Program Studi:</strong>
        {{ $mahasiswa->programStudi->nama }}
    </p>

    <p>
        <strong>Angkatan:</strong>
        {{ $mahasiswa->angkatan }}
    </p>

    <p>
        <strong>IPK:</strong>
        {{ $mahasiswa->ipk }}
    </p>
</div>

<h2 class="h5 mb-3">Mata Kuliah yang Diambil</h2>

<table class="table table-striped bg-white">
    <thead>
        <tr>
            <th>Kode</th>
            <th>Mata Kuliah</th>
            <th>SKS</th>
            <th>Semester</th>
            <th>Nilai</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($mahasiswa->matakuliah as $matakuliah)
            <tr>
                <td>{{ $matakuliah->kode }}</td>
                <td>{{ $matakuliah->nama }}</td>
                <td>{{ $matakuliah->sks }}</td>
                <td>{{ $matakuliah->semester }}</td>
                <td>{{ $matakuliah->pivot->nilai }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection