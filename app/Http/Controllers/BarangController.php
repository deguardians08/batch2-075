<?php

namespace App\Http\Controllers;

use App\Model\BarangModel;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('barang/index', [
            'barangs' => BarangModel::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $barang = new BarangModel;
        $barang->id_ = request('kode');
        $barang->nama = request('nama');
        $barang->nama = request('nama');
        $barang->save();
        return redirect('/barang');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\\BarangModel  $barangModel
     * @return \Illuminate\Http\Response
     */
    public function show(BarangModel $barangModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\\BarangModel  $barangModel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('barang/edit', [
            'barang' => BarangModel::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\\BarangModel  $barangModel
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, BarangModel $barangModel)
    public function update(){
        $barang = BarangModel::find(request('id'));
        $barang->kode = request('kode');
        $barang->nama = request('nama');
        $barang->save();
        return redirect('/barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\\BarangModel  $barangModel
     * @return \Illuminate\Http\Response
     */
    // public function destroy(BarangModel $barangModel)
    public function destroy($id){
        BarangModel::destroy($id);
        return redirect('/barang');
    }
}
