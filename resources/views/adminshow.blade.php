<!-- menggunakan kerangka dari master.blade.php -->
@extends('master')
 
@section('header')
<h2><center>Data Karyawan</center></h2>
@endsection
 
@section('title', 'Halaman Khusus Admin')
 
@section('main')
    
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="/add"><button class="btn btn-primary mb-3">Tambah Data</button></a>
        </li>
      </ul>
      <form class="d-flex" action="/cari" method="get">
        <input class="form-control me-2" type="text" name="cari" placeholder="Search" value="{{ old('cari') }}">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="col-md-12 bg-white p-4">
        <table class="table table-responsive table-bordered table-hover table-stripped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Bagian/Toko</th>
                    <th>Tanggal Masuk Kerja</th>
                    <th>Tanggal Keluar Kerja</th>
                    <th width="15%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($karyawan as $kr => $karyawan)
                    <tr>
                        <td>{{ ++$kr }}</td>
                        <td>{{ $karyawan->nik }}</td>
                        <td>{{ $karyawan->nama }}</td>
                        <td>{{ $karyawan->jabatan }}</td>
                        <td>{{ $karyawan->bagian }}</td>
                        <td>{{ $karyawan->tglmasuk }}</td>
                        <td>{{ $karyawan->tglkeluar }}</td>
                        <td>
                            <a href="/edit/{{ $karyawan->id }}"><button class="btn btn-success">Edit</button></a>
                            <a href="/delete/{{ $karyawan->id }}"><button class="btn btn-danger">Hapus</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection