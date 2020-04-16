<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{

    public function create($prodi)
    {
        return view('tambah', compact('prodi'));
    }

    public function store(Request $request, $prodi)
    {
        DB::table($prodi)->insert([
            'no_ujian' => $request->no_ujian,
            'nama' => $request->nama,
            'kelamin' => $request->kelamin,
            'jenjang' => $request->jenjang,
            'fakultas' => $request->fakultas,
            'prodi' => $request->prodi,
            'jalur_masuk' => $request->jalur_masuk
    ]);
  
        return redirect('/show/'.$prodi);
    }

    public function edit($prodi, $no_ujian)
    {
        $mhs = DB::table($prodi)->where('no_ujian',$no_ujian)->get();
        $mahasiswa = $mhs[0];
        return view('edit', compact('mahasiswa'));
    }

    public function update(Request $request, $prodi, $no_ujian)
    {
        DB::table($prodi)->where('no_ujian', $request->no_ujian)->update([
            'no_ujian' => $request->no_ujian,
            'nama' => $request->nama,
            'kelamin' => $request->kelamin,
            'jenjang' => $request->jenjang,
            'fakultas' => $request->fakultas,
            'prodi' => $request->prodi,
            'jalur_masuk' => $request->jalur_masuk
        ]);

        return redirect('/show/'.$prodi);
    }
    public function destroy($prodi, $no_ujian)
    {
        DB::table($prodi)->where('no_ujian',$no_ujian)->delete();
        return redirect('/show/'.$prodi);
    }


    public function show($prodi)
    {
        $mahasiswa = DB::table($prodi)->paginate(20);
        return view('show', ['mahasiswa' => $mahasiswa, 'prodi' => $prodi]);
    }

     public function home()
    {
        return view('home');
    }
}
