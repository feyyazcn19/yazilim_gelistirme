<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Kullanıcı bilgilerini almak için kullanacağız.
use Illuminate\Support\Facades\Auth;

//Pdf Oluşturmak için gerekli olan kısım.
use PDF;

class PdfGenerate extends Controller
{



    public function cap_create()
    {
        $user=Auth::user();

        $data=[
          'name'=> $user->name,
          'ogrenci_no'=>$user->ogrenci_no,
          'tc'=>$user->tc,
          'sinif'=>$user->sinif,
          'email'=>$user->email,
          'ogrenci_bolum'=>$user->ogrenci_bolum,
          'ogrenci_fakulte'=>$user->ogrenci_fakulte,
          'telefon_no'=>$user->telefon_no,
          'dogum'=>$user->dogum,
        ];
        $pdf = PDF::loadView('pdf.cap_create', $data);
        return $pdf->download('deneme.pdf');
    }


    public function dgs_create()
    {
      $data=[
        'name'=> $user->name,
        'ogrenci_no'=>$user->ogrenci_no,
        'tc'=>$user->tc,
        'sinif'=>$user->sinif,
        'email'=>$user->email,
        'ogrenci_bolum'=>$user->ogrenci_bolum,
        'ogrenci_fakulte'=>$user->ogrenci_fakulte,
        'telefon_no'=>$user->telefon_no,
        'dogum'=>$user->dogum,
      ];
        $pdf = PDF::loadView('pdf.dgs_create', $data);
        return $pdf->download('deneme.pdf');
    }

    public function yaz_create()
    {
      $data=[
        'name'=> $user->name,
        'ogrenci_no'=>$user->ogrenci_no,
        'tc'=>$user->tc,
        'sinif'=>$user->sinif,
        'email'=>$user->email,
        'ogrenci_bolum'=>$user->ogrenci_bolum,
        'ogrenci_fakulte'=>$user->ogrenci_fakulte,
        'telefon_no'=>$user->telefon_no,
        'dogum'=>$user->dogum,
      ];
        $pdf = PDF::loadView('pdf.yaz_create', $data);
        return $pdf->download('deneme.pdf');
    }
    public function yatay_gecis_create()
    {
      $data=[
        'name'=> $user->name,
        'ogrenci_no'=>$user->ogrenci_no,
        'tc'=>$user->tc,
        'sinif'=>$user->sinif,
        'email'=>$user->email,
        'ogrenci_bolum'=>$user->ogrenci_bolum,
        'ogrenci_fakulte'=>$user->ogrenci_fakulte,
        'telefon_no'=>$user->telefon_no,
        'dogum'=>$user->dogum,
      ];
        $pdf = PDF::loadView('pdf.yatay_gecis_create', $data);
        return $pdf->download('deneme.pdf');
    }

    public function ders_intibaki_create()
    {
      $data=[
        'name'=> $user->name,
        'ogrenci_no'=>$user->ogrenci_no,
        'tc'=>$user->tc,
        'sinif'=>$user->sinif,
        'email'=>$user->email,
        'ogrenci_bolum'=>$user->ogrenci_bolum,
        'ogrenci_fakulte'=>$user->ogrenci_fakulte,
        'telefon_no'=>$user->telefon_no,
        'dogum'=>$user->dogum,
      ];
        $pdf = PDF::loadView('pdf.ders_intibaki_create', $data);
        return $pdf->download('deneme.pdf');
    }


}
