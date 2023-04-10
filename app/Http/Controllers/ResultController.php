<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDO;
use App\Models\Log;

class ResultController extends Controller
{
    //index
    public function index(){
        $mail = Log::all();
        return view('halaman2', compact('mail'));
    }
}
