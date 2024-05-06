<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;


class BarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::all();
        return view('barang.index', compact('barangs'));
    }

    public function create()
    {
        return view('barang.create');
    }
   
	public function store(Request $request)
{
    // Validasi input data sesuai kebutuhan
    $validatedData = $request->validate([
        'nama' => 'required|string',
        'harga' => 'required|integer',
        'stok' => 'required|integer', // Validasi 'stok' harus diisi dan berupa bilangan bulat
    ]);

    // Buat data barang baru berdasarkan input dari form
    Barang::create($validatedData);

    // Redirect ke halaman daftar barang setelah berhasil disimpan
    return redirect()->route('barang.index');
}


    public function edit(Barang $barang)
    {
        return view('barang.edit', compact('barang'));
    }

    public function update(Request $request, Barang $barang)
    {
        // Validasi input data sesuai kebutuhan
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'harga' => 'required|integer',
            'stok' => 'required|integer',
        ]);

        // Update data barang berdasarkan input dari form
        $barang->update($validatedData);

        // Redirect ke halaman daftar barang setelah berhasil diupdate
        return redirect()->route('barang.index');
    }

    public function destroy(Barang $barang)
    {
        $barang->delete(); 
        return redirect()->route('barang.index'); 
    }
}


