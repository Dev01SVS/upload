<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        dd($request->file('arquivo')->store('images'));
        //dd($request->file('arquivo'), $request->all());
    }
}
