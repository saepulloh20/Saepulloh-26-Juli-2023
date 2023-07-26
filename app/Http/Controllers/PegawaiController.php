<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'pegawai_nama' => 'required',
            'pegawai_jabatan' => 'required',
            'pegawai_umur' => 'required|numeric',
            'pegawai_alamat' => 'required'
        ]);

        Pegawai::create([
            'pegawai_nama' => $request->pegawai_nama,
            'pegawai_jabatan' => $request->pegawai_jabatan,
            'pegawai_umur' => $request->pegawai_umur,
            'pegawai_alamat' => $request->pegawai_alamat
        ]);

        return redirect()->route('index')->with('success', 'Pegawai berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pegawai = Pegawai::findOrFail($id);
        return view('components.detail', [
            'pegawai' => $pegawai
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pegawai = Pegawai::findOrFail($id);

        $pegawai->update([
            'pegawai_nama' => $request->pegawai_nama,
            'pegawai_alamat' => $request->pegawai_alamat,
            'pegawai_umur' => $request->pegawai_umur,
            'pegawai_jabatam' => $request->pegawai_jabatan
        ]);

        return redirect()->route('index')->with('success', 'Pegawai Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->delete();
        return redirect()->route('index')->with('success', 'Data Berhasil Dihapus');
    }
}
