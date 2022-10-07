<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class TugasController extends Controller
{
    public function show()
    {
        $karyawans = DB::table('karyawan')->orderby('id', 'desc')->get();
        return view('show', ['karyawan'=>$karyawans]);
    }

    public function add()
    {
        return view('add');
    }
 
    public function add_process(Request $karyawan)
    {
        DB::table('karyawan')->insert([
            'nik'=>$karyawan->nik,
            'nama'=>$karyawan->nama,
            'jabatan'=>$karyawan->jabatan,
            'bagian'=>$karyawan->bagian,
            'tglmasuk'=>$karyawan->tglmasuk,
            'tglkeluar'=>$karyawan->tglkeluar,
        ]);
        return redirect()->action('TugasController@show_by_admin');
    }

    public function edit($id)
    {
        $karyawans = DB::table('karyawan')->where('id', $id)->first();
        return view('edit', ['karyawan'=>$karyawans]);
    }

    public function show_by_admin()
    {
        
        $karyawans = DB::table('karyawan')->orderby('id', 'desc')->get();
        return view('adminshow', ['karyawan'=>$karyawans]);
    }

    public function cari(Request $karyawan)
    {
        $cari = $karyawan->cari;
        $karyawan = DB::table('karyawan')
        ->where('nama', 'like', "%".$cari."%")
        ->paginate();

        return view('adminshow', ['karyawan'=>$karyawan]);
    }

    public function edit_process(Request $karyawan)
    {
        $id = $karyawan->id;
        $nik = $karyawan->nik;
        $nama = $karyawan->nama;
        $jabatan = $karyawan->jabatan;
        $bagian = $karyawan->bagian;
        $tglmasuk = $karyawan->tglmasuk;
        $tglkeluar = $karyawan->tglkeluar;
        DB::table('karyawan')->where('id', $id)
                            ->update([
                            'nik' => $nik, 
                            'nama' => $nama,
                            'jabatan' => $jabatan,
                            'bagian'=> $bagian,
                            'tglmasuk' => $tglmasuk,
                            'tglkeluar' => $tglkeluar,
                        ]);
        Session::flash('success', 'Data berhasil diedit');
        return redirect()->action('TugasController@show_by_admin');
    }

    public function delete($id)
    {
        //menghapus data Karyawan dengan ID sesuai pada URL
        DB::table('karyawan')->where('id', $id)
                            ->delete();
 
        //membuat pesan yang akan ditampilkan ketika artikel berhasil dihapus
        Session::flash('success', 'Data berhasil dihapus');
        return redirect()->action('TugasController@show_by_admin');
    }
}
