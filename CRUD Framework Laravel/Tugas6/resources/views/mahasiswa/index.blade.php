@extends('layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Mahasiswa</h1>
</div>

@if(session()->has('success'))
<div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
</div>
@endif

<div class="table-responsive col-lg-8">
    <a href="/mahasiswa/create" class="btn btn-primary mb-4">Tambah Data Mahasiswa</a>
        <thead>
        <div class="col-lg-16">
                <div class="card">
                    <div class="container">
                        <table class="table tble-striped table-hover">
            <tr>
                <th style="text-align: center">No</th>
                <th >NIM</th>
                <th >Nama</th>
                <th >Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Prodi</th>
                <th>Email</th>
                <th>Foto</th>
                <th style="text-align: center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mahasiswa as $mhs)
            <tr>
                <td style="text-align: center">{{ $loop->iteration }}</td>
                <td>
                    {{ $mhs['nim'] }}
                </td>
                <td>
                    {{ $mhs['nama'] }}
                </td>
                <td>
                    {{ $mhs['jk'] }}
                </td>
                <td>
                    {{ $mhs['alamat'] }}
                </td>
                <td>
                    {{ $mhs['prodi'] }}
                </td>
                <td>
                    {{ $mhs['email'] }}
                </td>
                <td><img src="img/<?= $mhs['foto']; ?>" style="width: 90px"></td>
                <td style="text-align: center">
                    <a href="/mahasiswa/{{ $mhs['id'] }}" class="badge bg-info"><span data-feather="eye">Show</span></a>
                    <a href="/mahasiswa/{{ $mhs['id'] }}/edit" class="badge bg-warning"><span data-feather="edit">Edit</span></a>
                    <form action="/mahasiswa" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0"
                            onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus<span
                                data-feather="x-circle"></span></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection