<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        var_dump(Request('namaproduk'));
        var_dump(Request('deskripsi'));
        var_dump(Request('gambar'));
    }
}
