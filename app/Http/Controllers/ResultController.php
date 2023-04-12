<?php

namespace App\Http\Controllers;

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
        ->get();
        return view('halaman2', compact('mail'));
        // return $log;
    }

    public function search(Request $request){
        $key = $request->search;
        $mail = Surat::where('nosurat' , 'like', '%'. $key .'%')
        ->orWhere('hal', 'like', '%' . $key . '%')
        ->orWhere('kepada', 'like', '%' . $key . '%')
        ->orWhere('dari', 'like', '%' . $key . '%')
        ->orWhere('noagenda', 'like', '%' . $key . '%')
        ->get();
        return view('halaman2', compact('mail'));

    }
}
