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

    public function edit(Mahasiswa $id) {
        return view('mahasiswa.edit', [
            'title' => 'Mahasiwa',
            'mahasiswa' => $id,
            "prodis" => Prodi::all()
        ]);
    }

    public function update(Request $request, $id) {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $validateData = $request->validate([
            'nama' => 'required|string|max:100',
            'nim' => 'required|unique:mahasiswas|string',
            'prodi_id' => 'required'
        ]);

        $mahasiswa->update($validateData);

        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil Diupdate');
    }

    public function destroy($id) {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil Dihapus');
    }
}
