<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class LokasiSeeder extends Seeder
{
    public function run()
    {
    	
        DB::table('lokasi')->insert([
            'nama' => $request->nama,
            'nis' => $request->nis,
            'kelas' => $request->kelas,
            'cita_cita' => $request->cita_cita,
            'alamat' => $request->alamat
        ]);
    }
}
