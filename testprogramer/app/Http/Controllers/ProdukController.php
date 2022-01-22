<?php

namespace App\Http\Controllers;

use App\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produks = Produk::all();
        return view('layouts.produk.index' , compact('produks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.produk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_produk' => 'required|unique:produks|min:1',
            'nama_produk' => 'required|min:1',
            'harga' => 'integer'
        ]);
        $produk = new Produk();
        $produk->id_produk = $request->id_produk;
        $produk->nama_produk = $request->nama_produk;
        $produk->harga = $request->harga;
        $produk->kategori = $request->kategori;
        $produk->status = $request->status;
        $produk->save();
        return redirect()->route('produk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit(Produk $produk)
    {
        //Produk $produk
        $edit =Produk::find($produk->id_produk);
        return view('layouts.produk.edit')->with('produk', $edit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produk $produk)
    {
        $request->validate([
            'id_produk' => 'required|min:1',
            'nama_produk' => 'required|min:1',
            'harga' => 'integer'
        ]);
//        $produk = Produk::find($produk->id_produk);
        $produk->id_produk = $request->id_produk;
        $produk->nama_produk = $request->nama_produk;
        $produk->harga = $request->harga;
        $produk->kategori = $request->kategori;
        $produk->status = $request->status;
        $produk->save();
        return redirect()->route('produk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_produk)
    {
        $produk = Produk::find($id_produk);
        $produk->delete();
        return redirect()->route('produk.index');
    }

    public function dijual()
    {
        $produks = Produk::all()->where('status','bisa dijual');
        return view('layouts.produk.dijual' , compact('produks'));
    }
}
