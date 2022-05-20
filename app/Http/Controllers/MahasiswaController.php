<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
    	// mengambil data dari table mahasiswa
    	$mahasiswa = DB::table('mahasiswa')->get();
 
    	// mengirim data mahasiswa ke view index
    	return view('index',['mahasiswa' => $mahasiswa]);
 
    }
    public function tambah()
    {
 
	// memanggil view tambah
	return view('tambah');
 
    }
    // method untuk insert data ke table mahasiswa
    public function store(Request $request)
    {
        // insert data ke table mahasiswa
        DB::table('mahasiswa')->insert([
            'mahasiswa_nama' => $request->nama,
            'mahasiswa_umur' => $request->umur,
            'mahasiswa_alamat' => $request->alamat,
            'mahasiswa_jurusan' => $request->jurusan
        ]);
        // alihkan halaman ke halaman mahasiswa
        return redirect('/mahasiswa');
    
    }
    // method untuk edit data mahasiswa
    public function edit($id)
    {
        // mengambil data mahasiswa berdasarkan id yang dipilih
        $mahasiswa = DB::table('mahasiswa')->where('mahasiswa_id',$id)->get();
        // passing data mahasiswa yang didapat ke view edit.blade.php
        return view('edit',['mahasiswa' => $mahasiswa]);
    
    }
    // update data mahasiswa
    public function update(Request $request)
    {
        // update data mahasiswa
        DB::table('mahasiswa')->where('mahasiswa_id',$request->id)->update([
            'mahasiswa_nama' => $request->nama,
            'mahasiswa_umur' => $request->umur,
            'mahasiswa_alamat' => $request->alamat,
            'mahasiswa_jurusan' => $request->jurusan
        ]);
        // alihkan halaman ke halaman mahasiswa
        return redirect('/mahasiswa');
    }
    // method untuk hapus data mahasiswa
    public function hapus($id)
    {
        // menghapus data mahasiswa berdasarkan id yang dipilih
        DB::table('mahasiswa')->where('mahasiswa_id',$id)->delete();
            
        // alihkan halaman ke halaman mahasiswa
        return redirect('/mahasiswa');
    }
}
