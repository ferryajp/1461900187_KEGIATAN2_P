<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class Controller0187 extends Controller

{
    public function buku(){
        $buku = DB::table('buku')->get();
        
        return view('buku0187',['buku' => $buku]);
    }
    public function kategori(){
        $kategori = DB::table('kategori')->get();
        
        return view('kategori0187',['kategori' => $kategori]);
    }
    public function kategoribuku(){
    $kategori = DB::table('buku')
            ->join('kategori', 'kategori.buku_id','=', 'kategori.kategori_id', 'buku_deskripsi')
            
            ->select('buku_judul','buku_deskripsi','buku_jumlah', 'kategori_nama')
            ->get();

        return view('kategoribuku0187',['kategoribuku' => $kategori]);
    }
}