<!-- membuat kerangka dari master.blade.php -->
@extends('master')
 
<!-- membuat komponen title sebagai judul halaman -->
@section('title', 'Menambah Data')
 
<!-- membuat komponen main yang berisi form untuk mengisi judul dan isi artikel -->
@section('main')
<div class="col-md-8 col-sm-12 bg-white p-4">
    <form method="post" action="/add_process">
    @csrf
        <div class="form-group">
            <label>NIK</label>
            <input type="text" class="form-control" name="nik" placeholder="Masukkan NIK">
        </div>
      
        <div class="form-group mt-4">
            <label>Nama</label>
            <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
        </div>
     
        <div class="form-group mt-4">
            <label>Jabatan</label>
            <input type="text" class="form-control" name="jabatan" placeholder="Masukkan Jabatan">
        </div>
    
        <div class="form-group mt-4">
            <label>Bagian/Toko</label>
            <input type="text" class="form-control" name="bagian" placeholder="Masukkan Bagian/Toko">
        </div>
   
        <div class="form-group mt-4">
            <label>Tanggal Masuk Kerja</label>
            <input type="date" class="form-control" name="tglmasuk" placeholder="Masukkan Tanggal Masuk Kerja">
        </div>
        <div class="form-group mt-4">
            <label>Tanggal Keluar Kerja</label>
            <input type="date" class="form-control" name="tglkeluar" placeholder="Masukkan Tanggal Keluar Kerja">
        </div>

        <div class="col-md-3 ml-md-5 col-sm-12 bg-white p-4" style="height:120px !important">
            <div class="form-group mt-4">
                <input type="submit" class="form-control btn btn-primary" value="Submit">
            </div>
        </div>
</div>


</form>
@endsection
 