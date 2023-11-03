<?php

namespace App\Http\Controllers;

use App\Models\ecommerce2;
use Illuminate\Http\Request;

class Econtroller extends Controller
{
    public function index()
{
$ecommerce2s = ecommerce2::all();
return view('barang.index', compact('ecommerce2s'));
}
public function create()
{
return view('barang.create');
}
public function store(Request $request)
{
$request->validate([
'kode_barang' => 'required|unique:ecommerce2s',
'nama_barang' => 'required',
'harga_barang' => 'required',
]);
ecommerce2::create($request->all());
return redirect()->route('barang.index')
->with('success', 'barang berhasil ditambahkan');
}
public function edit($id)
{
$barang = ecommerce2::find($id);
return view('barang.edit', compact('barang'));
}
public function update(Request $request, $id)
{
$request->validate([
'nama_barang' => 'required',
'harga_barang' => 'required',
]);
$barang = ecommerce2::find($id);
$barang->update($request->all());
return redirect()->route('barang.index')
->with('success', 'barang berhasil diperbarui');
}
public function destroy($id)
{
$barang = ecommerce2::find($id);
$barang->delete();
return redirect()->route('barang.index')
->with('success', 'barang berhasil dihapus');
}
}
