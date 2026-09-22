@extends('layouts.app')

@section('judul', '10 Mahasiswa IPK Tertinggi')

@section('konten')

<h1 class="h3 mb-4">
    10 Mahasiswa dengan IPK Tertinggi
</h1>

<p>
    Program Studi: <strong>Teknik Komputer</strong>
</p>

<table class="table table-striped bg-white">
    <thead>
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Angkatan</th>
            <th>IPK</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($mahasiswa as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->nim }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->angkatan }}</td>
                <td>{{ $item->ipk }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection