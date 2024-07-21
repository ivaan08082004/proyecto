<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FormController extends Controller
{
public function index(){
    return view('index');

}
public function saveData(Request $request){
    Log::info($request->json()->all());
    return redirect('/');
}
    // 
}
