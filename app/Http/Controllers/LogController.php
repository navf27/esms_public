<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;

class LogController extends Controller
{
    //index
    public function index(){
        return view('halaman1');
    }

    //store
    public function store(Request $request){

        $log = Log::create([
            'nama' => $request->nama,
            'hp' => $request->hp,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'kata_kunci' => $request->kata_kunci,
            'ip' => $request->ip()
        ]);

        // $log = $request;

        // return redirect('result')->with(compact('log'));
        // return Redirect::route('halaman2.index',['log' => $log]);
        // return redirect(route('halaman2.index',['log' => $log]));
        // return redirect('/result', compact('log'));
        // return view('halaman2', compact('log'));
        // return $log->nama;
        return redirect()->route('halaman2.index')->with(['nama' => $log->nama, 'alamat' => $log->alamat, 'hp' => $log->hp, 'jenis_kelamin' => $log->jenis_kelamin]);
    }
}

