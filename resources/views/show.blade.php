<!-- menggunakan kerangka dari halaman master.blade.php --> 
@extends('master')
 
<!-- membuat komponen title sebagai judul halaman -->
@section('title', 'Data Karyawan')
 
<!-- membuat header dan tombol tambah artikel di atas -->
@section('header')
    <center>
        <h2>Data Karyawan</h2>
        <a href="/add"><button class="btn btn-success">Tambah Data</button></a>
    </center>
@endsection
 
<!-- membuat komponen main yang berisi form untuk mengisi data karyawan -->
@section('main')
    <table class="table">
  <thead>
    <tr>
      <th scope="col">NIK</th>
      <th scope="col">Nama</th>
      <th scope="col">Jabatan</th>
      <th scope="col">Bagian/Toko</th>
      <th scope="col">Tanggal Masuk Kerja</th>
      <th scope="col">Tanggal Keluar Kerja</th>
    </tr>
  </thead>
  @foreach ($karyawan as $kr)
  <tbody> 
    <tr>
      <th scope="row">{{ $kr->nik }}</th>
      <td>{{ $kr->nama }}</td>
      <td>{{ $kr->jabatan }}</td>
      <td>{{ $kr->bagian }}</td>
      <td>{{ $kr->tglmasuk }}</td>
      <td>{{ $kr->tglkeluar }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
   
@endsection