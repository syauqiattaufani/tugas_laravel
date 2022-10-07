@extends('master')
 
<!-- membuat judul bernama 'Edit Data' pada tab bar -->
@section('title', 'Edit Data')
 
@section('header')
<center class="mt-4">
    <h2>Edit Data</h2>
</center>
@endsection
 
@section('main')
<div class="col-md-8 col-sm-12 bg-white p-4">
    <form method="post" action="/edit_process">
    @csrf
	<input type="hidden" value="{{ $karyawan->id }}" name="id">
        <div class="form-group">
            <label>NIK</label>
            <input type="text" class="form-control" value="{{ $karyawan->nik }}" name="nik" placeholder="NIK">
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" value="{{ $karyawan->nama }}" name="nama" placeholder="Nama">
        </div>
        <div class="form-group">
            <label>Jabatan</label>
            <input type="text" class="form-control" value="{{ $karyawan->jabatan }}" name="jabatan" placeholder="Jabatan">
        </div>
        <div class="form-group">
            <label>Bagian/Toko</label>
            <input type="text" class="form-control" value="{{ $karyawan->bagian }}" name="bagian" placeholder="Bagian/Toko">
        </div>
        <div class="form-group">
            <label>Tanggal Masuk Kerja</label>
            <input type="date" class="form-control" value="{{ $karyawan->tglmasuk }}" name="tglmasuk" placeholder="Tanggal Masuk">
        </div>
        <div class="form-group">
            <label>Tanggal Keluar Kerja</label>
            <input type="date" class="form-control" value="{{ $karyawan->tglkeluar }}" name="tglkeluar" placeholder="Tanggal Masuk">
        </div>

        <div class="col-md-3 ml-md-5 col-sm-12 bg-white p-4" style="height:120px !important
            <div class="form-group">
        <input type="submit" class="form-control btn btn-primary" value="Edit">
        </div>
</div>
</form>
</div>
@endsection