<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pdf;
use App\Models\User;
use App\Models\BasvurTipi;

use Illuminate\Support\Facades\Auth;

class ListPDF extends Controller
{

    public function authList()
    {
        $userEmail=Auth::user()->email;
        $data=Pdf::where('email',$userEmail)->where('onay','Beklemede')->get();

        foreach ($data as $item) {
           $item->tip=BasvurTipi::where('basvuru_id',$item->tip)->first()->tip;

        }

        return view('user.pdflistele')->with('pdfler',$data);
    }

    public function onayList()
    {
        $userEmail=Auth::user()->email;
        $data=Pdf::where('email',$userEmail)->where('onay','Onaylandı')->get();
        foreach ($data as $item) {
            $item->tip=BasvurTipi::where('basvuru_id',$item->tip)->first()->tip;
        }
        return view('user.pdfonay')->with('pdfler',$data);
    }

    public function redList()
    {
        $userEmail=Auth::user()->email;
        $data=Pdf::where('email',$userEmail)->where('onay','Red')->get();
        foreach ($data as $item) {
            $item->tip=BasvurTipi::where('basvuru_id',$item->tip)->first()->tip;
        }
        return view('user.pdfred')->with('pdfler',$data);
    }

    public function adminListBekleme($tip)
    {
        $data=Pdf::where('onay','Beklemede')->where('tip',$tip)->get();
        foreach ($data as $item) {
           $item->tip=BasvurTipi::where('basvuru_id',$item->tip)->first()->tip;
           $item->username=User::where('email',$item->email)->first()->name;

        }

        return view('admin.basvuru.bekleme')->with('basvurular',$data);

    }

    public function adminListRed($tip)
    {
      $data=Pdf::where('onay','Red')->where('tip',$tip)->get();

      foreach ($data as $item) {
         $item->tip=BasvurTipi::where('basvuru_id',$item->tip)->first()->tip;
         $item->username=User::where('email',$item->email)->first()->name;

      }
      
        return view('admin.basvuru.red')->with('basvurular',$data);

    }

    public function adminListOnay($tip)
    {
      $data=Pdf::where('onay','Onaylandı')->where('tip',$tip)->get();

      foreach ($data as $item) {
         $item->tip=BasvurTipi::where('basvuru_id',$item->tip)->first()->tip;
         $item->username=User::where('email',$item->email)->first()->name;

      }
        return view('admin.basvuru.onay')->with('basvurular',$data);

    }




}
