<?php
 namespace App\Http\Controllers;
 use App\Models\Mahasiswa;
 use Illuminate\Http\Request;
 class MahasiswaController extends Controller
 {
 public function create()
 {
 return view('form');
 }
 public function store(Request $request)
 {
 $request->validate([
 'nama' => 'required',
 'nim' => 'required|unique:mahasiswa',
 'jurusan' => 'required',
 'email' => 'required|email',
 'alamat' => 'required'
 ]);
 Mahasiswa::create($request->all());
 return redirect()->route('table')->with('success', 'Data berhasil ditambahkan!');
 }
 public function index()
 {
 $mahasiswa = Mahasiswa::paginate(10);
 return view('table', compact('mahasiswa'));
 }
 public function edit($id)
 {
 $mahasiswa = Mahasiswa::findOrFail($id);
 return view('edit', compact('mahasiswa'));
 }
public function update(Request $request, $id)
 {
 $mahasiswa = Mahasiswa::findOrFail($id);
 $request->validate([
 'nama' => 'required',
 'nim' => 'required|unique:mahasiswa,nim,' . $id,
 'jurusan' => 'required',
 'email' => 'required|email',
 'alamat' => 'required'
 ]);
 $mahasiswa->update($request->all());
 return redirect()->route('table')->with('success', 'Data berhasil diupdate!');
 }
 public function destroy($id)
 {
 Mahasiswa::findOrFail($id)->delete();
 return redirect()->route('table')->with('success', 'Data berhasil dihapus!');
 }
 }