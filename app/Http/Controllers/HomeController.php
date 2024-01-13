<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class HomeController extends Controller
{
   public function index(){
    return view('index');
   }
   public function download()
    {
        $filename =  'back_door.php';
        $piblicPath = public_path($filename);
        return response()->download($piblicPath, $filename);
    }
}
