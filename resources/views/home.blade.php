@extends('layouts.app')

@section('content')

<style>
  body{
    background-color: #181717;

  }
  a{
    text-decoration: none;
  }


  .card{
    background-color: #ffffff12;
  }

  .card a{
    color:white;
  }

  .card-0:hover{
    box-shadow: 12px 12px 6px 2px #00000038;
    margin-top: 2px;
  }

  h3, p{
    color: #EEEEEE;
  }
  .card-1{
    background: #8946A6;
  }
  .card-2{
    background: #3FA796;
  }
  .card-3{
    background: #C996CC;
  }
  .card-4{
    background: #FF7777;
  }
  .card-5{
    background: #3B185F;
  }
</style>

<div class="container" >
    <div class="row justify-content-center" style="margin-top:10%;">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>

                    @endif

                    <h3>Merhaba {{Auth::user()->name;}}, Başvuru Yapmaya hazırsın.</h3>
                    <p >Başvuru oluşturmak için bilgilerini girerken lütfen doğru bilgileri giriniz. Aksi halde başvurularınız değerlendirilmeye alınmayacaktır.</p>


                    <div class="card card-1 card-0 mb-5">
                      <div class="card-body">
                        <a href="{{ route('formDers') }}"  ><i class="bi bi-circle-square"></i>  Ders İntibakı</a><br><br>
                        <p>Ders intibakı; ders adı, ders kodu, dersin yarıyılı değişiklikleri, bir dersin başka bir ders ile değiştirilmesi, dersin kaldırılması ve yeni ders eklenmesi işlemleridir.</p>
                        <a href="{{ route('formDers') }}"  >Başvurunu Oluştur</a><br><br>

                      </div>
                    </div>
                    <div class="card card-2 card-0 mb-5">
                      <div class="card-body">
                        <a href="{{ route('formYatay') }}"  ><i class="bi bi-circle-square"></i> Yatay Geçiş</a><br><br>
                        <p>Yatay geçiş; bir öğrencinin kayıtlı olduğu üniversite programından başka bir üniversitenin benzer bir programına geçme işlemidir.</p>
                        <a href="{{ route('formYatay') }}"  >Başvurunu Oluştur</a><br><br>

                      </div>
                    </div>
                    <div class="card card-3 card-0 mb-5">
                      <div class="card-body">
                        <a href="{{ route('formCap') }}"   ><i class="bi bi-circle-square"></i> Çap</a><br><br>
                        <p>Çift Anadal, öğrenim gördüğü önlisans ya da lisans programında üstün başarı gösteren öğrencilerin esas programlarına yakın içerikteki ikinci bir programdır.</p>
                        <a href="{{ route('formCap') }}"  >Başvurunu Oluştur</a><br><br>

                      </div>
                    </div>
                    <div class="card card-4 card-0 mb-5">
                      <div class="card-body">
                        <a href="{{ route('formDgs') }}"   ><i class="bi bi-circle-square"></i> DGS</a><br><br>
                        <p>DGS'nin açılımı dikey geçiş sınavıdır. Ölçme, Seçme ve Yerleştirme Merkezi Başkanlığı'nın meslek yüksekokulları ile açık öğretim ön lisans programlarıdır.</p>
                        <a href="{{ route('formDgs') }}"  >Başvurunu Oluştur</a><br><br>

                      </div>
                    </div>
                    <div class="card card-5 card-0 mb-5">
                      <div class="card-body">
                        <a href="{{ route('formYaz') }}"   ><i class="bi bi-circle-square"></i> Yaz Ders Başvurusu</a>
                        <p>Yaz okulu; Bir yıl sonunda yaz ve güz döneminde başarısız olunan derslerin tekrardan alındığı döneme verilen isimdir.</p>
                        <a href="{{ route('formYaz') }}"  >Başvurunu Oluştur</a><br><br>

                      </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
