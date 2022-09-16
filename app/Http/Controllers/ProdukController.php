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
        $this->validate($request, [
			'nama_produk' => 'required',
            'deskripsi' => 'required',
			'gambar' => 'required|image|mimes:jpeg,png,jpg',
		]);
		$file = $request->file('gambar');
 
		$nama_file = time()."_".$file->getClientOriginalName();
		$tujuan_upload = 'produk';
		$file->move($tujuan_upload,$nama_file);
 
		Produk::insert([
			'nama_produk' => $request->nama_produk,
            'deskripsi' => $request->deskripsi,
			'gambar' => $nama_file
		]);

        return redirect('/produk/tampil');
    }
}
