<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kouzaContoroller extends Controller
{

    public function post(Request $request){
        $text = $request->text;
        return redirect()->route('recv', compact('text'));
    }

    public function recv(Request $request){
        $text = $request->text;
        return view('value', compact('text'));
    }
}
