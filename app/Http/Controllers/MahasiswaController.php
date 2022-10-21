<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;
class MahasiswaController extends Controller
{
    //
    public function index() {
        return view('mahasiswa.index', [
            'mahasiswas' => Mahasiswa::all(),
            'title' => 'Mahasiwa'
        ]);
    }

    public function create() {
        return view('mahasiswa.create', [
            "prodis" => Prodi::all(),
            'title' => 'Mahasiwa'
        ]);
    }

    public function store(Request $request) {

        $validateData = $request->validate([
            'nama' => 'required|string|max:100',
            'nim' => 'required|unique:mahasiswas|string',
            'prodi_id' => 'required'
        ]);

        Mahasiswa::create($validateData);

        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil ditambahkan');
    }

    public function show(Mahasiswa $id) {
        return view('mahasiswa.show', [
            'title' => 'Mahasiwa',
            'mahasiswa' => $id
        ]);
    }
}
