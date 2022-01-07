@extends('admin.layouts.app')

@section('content')

<style>
  body{
    background-color: white;

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

h3,   p{
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


        <div class="col-md-12">
          <div class="card bg-dark">
              <div class="card-body">
                <h3>Merhaba {{Auth::user()->name;}}, Beklemede olan başvuruları görüntülüyorsun.</h3>
                <p >Dosyayı görüntüleye tıklayarak gönderdiin dosyları görüntüleyebilirsin.</p>

              </div>

          </div>
          <form class="form" action="{{route('pdfguncelle')}}" method="post">
            @csrf
            <select class="form-select mt-5"  name="durum" id="durum" required onclick="disab()">
                <option  selected>Seçili Kullanıcıların Durumlarını Güncelle</option>
                <option value="Onaylandı">Onaylandı</option>
                <option value="Beklemede">Beklemede</option>
                <option value="Red">Red</option>
            </select>
          <table class="table table-dark table-striped mt-5">
                <thead>
                  <tr>
                    <th scope="col">Seç</th>
                    <th scope="col">Kullanıcı Adı</th>
                    <th scope="col">Başvuru Tip</th>
                    <th scope="col">Durumu</th>
                    <th scope="col">Oluşturma Tarih</th>
                    <th scope="col">Görüntüle</th>

                  </tr>
                </thead>
                <tbody>
                  @foreach($basvurular as $basvuru)
                  <tr>
                    <th scope="row">
                      <input type="checkbox" name="pdf_id[]" value="{{$basvuru->_id}}">
                    </th>
                    <th scope="row">{{$basvuru->username}}</th>
                    <th scope="row">{{$basvuru->tip}}</th>
                    <td>{{$basvuru->onay}}</td>
                    <td>{{$basvuru->created_at}}</td>
                    <td> <a href="/{{$basvuru->pdf_url}}" target="_blank"><i class="bi bi-file-earmark-pdf" style="color:white;"></i></a> </td>
                  </tr>
                  @endforeach
                </tbody>
                </table>

                <input type="submit" name="submit" id="submit" value="Seçili Kullanıcıları Güncelle" disabled class="btn btn-primary">
              </form>

        </div>
    </div>

    <div class="row justify-content-center mt-5" >
      <div class="col-md-6">
        <div class="card card-3 card-0 mb-5">
          <div class="card-body">
            <a href="/admin/listele/onay/{{$basvurular->tip_id}}"  ><i class="bi bi-circle-square"></i> Onaylanan Başvuruları Görüntüle</a><br><br>
            <p>Bu alanda sadece onaylanan başvurular yer alacaktır. </p>
            <a href="/admin/listele/onay/{{$tip}}"  >Görüntüle</a><br><br>

          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card card-1 card-0 mb-5">
          <div class="card-body">
            <a href="/admin/listele/red/{{$basvurular->tip_id}}"  ><i class="bi bi-circle-square"></i> Reddedilen Başvuruaları Görüntüle</a><br><br>
            <p>Bu alandaki başvular admin tarafından reddedilen başvurulardır.</p>
            <a href="/admin/listele/red/{{$tip}}"  >Görüntüle</a><br><br>

          </div>
        </div>
      </div>

    </div>
</div>

<script type="text/javascript">
      durum=document.getElementById('durum');
      submit=document.getElementById('submit');
      if(durum.selectedIndex!=0)
         submit.disabled=false;
      function disab(){
        durum=document.getElementById('durum');
        submit=document.getElementById('submit');
        if(durum.selectedIndex!=0)
           submit.disabled=false;
        else
          submit.disabled=true;
      }
</script>


@endsection
