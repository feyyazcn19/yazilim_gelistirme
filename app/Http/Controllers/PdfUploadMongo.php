<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pdf;
class PdfUploadMongo extends Controller
{
    //
    public function upload(Request $request)
    {
      $request->file->move(public_path('pdf'),$request->file->getClientOriginalName());
      $path=public_path('pdf').'\\'.$request->file->getClientOriginalName();
      $email=Auth::user()->email;
      Pdf::create([
        'email'=>$email,
        'pdf_url'=>$path
      ]);

      return view('home');

    }

}
