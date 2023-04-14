<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;
use PDO;
use App\Models\Surat;

class ResultController extends Controller
{
    //index
    public function index(){
        $key = session()->get('kata_kunci');

        $mail = Surat::where('nosurat' , 'like', '%'. $key .'%')
        ->orWhere('hal', 'like', '%' . $key . '%')
        ->orWhere('kepada', 'like', '%' . $key . '%')
        ->orWhere('dari', 'like', '%' . $key . '%')
        ->orWhere('noagenda', 'like', '%' . $key . '%')
        ->paginate(10);

        return view('halaman2', compact('mail'));
    }

    public function search(Request $request){
        $key = $request->search;

        $log = Log::create([
            'nama' => $request->nama,
            'hp' => $request->hp,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis,
            'kata_kunci' => $key,
            'ip' => $request->ip()
        ]);

        return redirect()->route('halaman2.index')->with(['nama' => $log->nama, 'alamat' => $log->alamat, 'hp' => $log->hp, 'jenis_kelamin' => $log->jenis_kelamin, 'kata_kunci' => $key]);
    }
}
