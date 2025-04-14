<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    // ✅ Ambil semua produk
    public function index()
    {
        return response()->json(Produk::all());
    }

    // ✅ Tambah produk baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_produk' => 'required|string',
            'harga' => 'required|integer',
            'stok' => 'required|integer',
        ]);

        $produk = Produk::create($validated);
        return response()->json($produk, 201);
    }

    // ✅ Tampilkan satu produk
    public function show(Produk $produk)
    {
        return response()->json($produk);
    }

    // ✅ Update produk
    public function update(Request $request, Produk $produk)
    {
        $validated = $request->validate([
            'nama_produk' => 'required|string',
            'harga' => 'required|integer',
            'stok' => 'required|integer',
        ]);

        $produk->update($validated);
        return response()->json($produk);
    }

    // ✅ Hapus produk
    public function destroy(Produk $produk)
    {
        $produk->delete();
        return response()->json(['message' => 'Produk berhasil dihapus.']);
    }
}
