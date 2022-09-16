<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index()
    {
        $data = Produk::all();
        return view('produk.index', compact('data'));
    }

    public function create()
    {
        return view('produk.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_produk' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'image|mimes:jpg,jpeg,png',
        ]);

        if($request->file('gambar')){
            $validatedData['gambar'] = $request->file('gambar')->store('public/produk');
        }

        Produk::insert($validatedData);

        return redirect('/produk');
    }
}
