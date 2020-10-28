<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\biodata_siswa;

class DataController extends Controller
{
    public function index(Request $request)
 {
        if ($request->has('search')) {
            $lokasi = DB::table('lokasi')->where('nama', 'like', $request->get('search'))->get();
            return view('lokasi.index')->with('lokasi', $lokasi);
        } else {
        $lokasi = DB::table('lokasi')->get();
        return view('lokasi.index')->with('lokasi',$lokasi);
        }
    }
 	public function input()
 	{
 		return view('lokasi.input');
 	}

 	public function add(Request $request)
 	{
 		DB::table('lokasi')->insert([
 			'nama' => $request->nama,
 			'nis' => $request->nis,
 			'kelas' => $request->kelas,
 			'cita_cita' => $request->cita_cita,
 			'alamat' => $request->alamat 
 			]);
 		return redirect('/lokasi');
 	}

 	public function edit($id)
 	{
 		$lokasi =DB::table('lokasi')->where('id', $id)->get();
 		return view('lokasi.edit')->with('lokasi', $lokasi);
 	}

 	public function update(Request $request)
 	{
 		  DB::table('lokasi')->where('id', $request->id)->update([
            'nama' => $request->nama,
            'nis' => $request->nis,
            'kelas' => $request->kelas,
            'cita_cita' => $request->cita_cita,
            'alamat' => $request->alamat
        ]);
            
        return redirect(url('lokasi'));
 	}

 	public function delete($id)
 	{
 		 DB::table('lokasi')->where('id', $id)->delete();
        return redirect(url('lokasi'));

 	}
}
