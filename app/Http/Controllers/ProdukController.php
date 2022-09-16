<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
        return view('produk.create');
    }

    public function store()
    {
        $produk = new Produk;
        $produk->nama_produk = request('namaproduk');
        $produk->deskripsi = request('deskripsi');
        $produk->gambar = request()->file('gambar')->store('public/images');
        $produk->save();
    }
}
