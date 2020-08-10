<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Registercontroller extends Controller
{
    //
    public function index()
    {
       return view('register');
    }
    public function create(Request $request)
    {
        // \App\Pengiriman::create($request->all());
        $created_atawal = \Carbon\Carbon::now();
        $updated_atawal = \Carbon\Carbon::now();
        $created_at = \Carbon\Carbon::parse($created_atawal)->format('d/m/Y');
        $updated_at = \Carbon\Carbon::parse($updated_atawal)->format('d/m/Y');

        $dd1 = substr($created_at,0,2);
        $mm1 = substr($created_at,3,2);
        $yyyy1 = substr($created_at,6,4);
        $tgl1 = $yyyy1."-".$mm1."-".$dd1;

        $dd2 = substr($updated_at,0,2);
        $mm2 = substr($updated_at,3,2);
        $yyyy2 = substr($updated_at,6,4);
        $tgl2 = $yyyy2."-".$mm2."-".$dd2;

        // $dd3 = substr($request->tgl,0,2);
        // $mm3 = substr($request->tglmasukkerja,3,2);
        // $yyyy3 = substr($request->tglmasukkerja,6,4);
        $tgl3 = $request->thn."-".$request->bln."-".$request->tgl;

        // $dd4 = substr($request->tgllahir,0,2);
        // $mm4 = substr($request->tgllahir,3,2);
        // $yyyy4 = substr($request->tgllahir,6,4);
        $tgl4 = $request->thnlahir."-".$request->blnlahir."-".$request->tgllahir;

     DB::table('user')->insert(
            ['name' => $request->nama,'email' => $request->email,'password' => bcrypt('user'),'remember_token'=> Str::random(60),'level'=> '2','created_at'=> $tgl1,'updated_at'=> $tgl2]
        );
        $id = DB::getPdo()->lastInsertId();
        DB::table('detailmember')->insert(
            ['detailmbr_userid' => $id,'detailmbr_nik' => $request->nik,'detailmbr_tglmasukkerja' => $tgl3,'detailmbr_tgllahir'=> $tgl4,'detailmbr_divisi'=> $request->div,'detailmbr_company'=> $request->company,'created_by'=> $id,'created_at'=> $tgl1,'updated_by'=> $id,'updated_at'=> $tgl2]
        );
        return 'berhasil';
    }
}
