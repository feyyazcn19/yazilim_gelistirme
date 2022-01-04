
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="tr">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>

    * {
     font-family: "DejaVu Sans Mono", monospace;
   }

        .form-tipi{
          text-align: right;
          font-size: 10px;
        }
        .text-center{
            text-align: center;
        }
        .frame{
            border: 1px solid black;
            margin-top: 8px;
            padding: 10px;
        }
        table{
            width: 100%;
        }
        .main{
            margin:2px;
        }

        th{
          text-align: left;
        }
        th p,td p{
          font-size: 8px;
        }
        th,td{
          padding: 0;
          margin: 0;
        }

        .title{
          border-bottom: 1px solid black;
        }
        tr{
          height:12.95px !important;
        }

    </style>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <div class="main">
            <h5 class="text-center">KOCAELİ ÜNİVERSİTESİ <br> YATAY GEÇİŞ BAŞVURU FORMU
            </h5>
        <p class="form-tipi">OGR-F-4</p>
        <div class="frame">
          <!--Başvuru Türü-->
            <table >
                <thead>
                  <tr>
                    <th>
                      <p >  I- BASVURU TÜRÜ</p>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                            <p>KURUMİÇİ YATAY GEÇİŞ BAŞVURUSU <span></span></p>
                    </td>
                    <td >
                      <img src="https://icon-library.com/images/checkbox-icon-png/checkbox-icon-png-29.jpg" alt="" width="10px" height="10px">
                    </td>
                    <td>
                          <p>KURUMLARARASI YATAY GEÇİŞ BAŞVURUSU</p>
                    </td>
                    <td >
                      <img src="https://icon-library.com/images/checkbox-icon-png/checkbox-icon-png-7.jpg" alt="" width="10px" height="10px">
                    </td>

                  </tr>

                  <tr>
                    <td>
                          <p>
                            MER. YER. PUANIYLA YATAY GEÇİŞ BAŞVURUSU
                          </p>


                    </div>
                    </td>
                    <td >
                      <img src="https://icon-library.com/images/checkbox-icon-png/checkbox-icon-png-7.jpg" alt="" width="10px" height="10px">
                    </td>

                    <td>
                            <p>YURT DIŞI YATAY GEÇİŞ BAŞVURUSU <span></span></p>
                    </td>
                    <td >
                      <img src="https://icon-library.com/images/checkbox-icon-png/checkbox-icon-png-7.jpg" alt="" width="10px" height="10px">
                    </td>

                  </tr>

                </tbody>
              </table>

              <!--Kişisel Bilgiler-->

              <table >
                  <thead>
                    <tr>
                      <th>
                        <p >  II- KİŞİSEL BİLGİLER</p>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                           <p>ADI SOYADI:{{$name}}</p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                           <p>T.C. KİMLİK NO:{{$tc}}</p>
                      </td>
                      <td>
                           <p>DOĞUM TARİHİ: {{$dogum}}</p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                           <p>E-POSTA ADRESİ:{{$email}}</p>
                      </td>
                    </tr>
                    <tr>
                      <td>
                           <p>TELEFON(GSM):{{$telefon_no}}</p>
                      </td>
                      <td>
                           <p>TELEFON(EV/İŞ):............</p>
                      </td>
                    </tr>

                    <tr>
                      <td>
                           <p>TEBLİGAT ADRES:............</p>
                      </td>
                    </tr>

                  </tbody>
                </table>



                <!--III- ÖĞRENİMİNE İLİŞKİN BİLGİLER-->

                <table >
                    <thead>
                      <tr>
                        <th>
                          <p >  III- ÖĞRENİMİNE İLİŞKİN BİLGİLER</p>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                             <p>HALEN KAYITLI OLDUĞU ÜNİVERSİTE  :...........</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                             <p>HALEN KAYITLI OLDUĞU FAKÜLTE / YÜKSEKOKUL:{{$ogrenci_fakulte}}</p>
                        </td>
                      </tr>
                      <tr>
                        <td>
                             <p>HALEN KAYITLI OLDUĞU BÖLÜM / PROGRAM	:{{$ogrenci_bolum}}</p>
                        </td>
                      </tr>




                      <tr>
                        <td>
                             <p>ÖĞRETİM TÜRÜ: I.ÖĞRETİM <img src="https://icon-library.com/images/checkbox-icon-png/checkbox-icon-png-29.jpg" alt="" width="10px" height="10px"> II.ÖĞRETİM <img src="https://icon-library.com/images/checkbox-icon-png/checkbox-icon-png-7.jpg" alt="" width="10px" height="10px">  SINIF/ YARIYIL :{{$sinif}}</p>
                        </td>
                      </tr>

                      <tr>
                        <td>
                             <p>DİSİPLİN CEZASI ALIP ALMADIĞI:</p>
                        </td>
                      </tr>

                      <tr>
                        <td>
                             <p>GENEL AKADEMİK BAŞARI NOT ORTALAMASI:</p>
                        </td>
                      </tr>

                      <tr>
                        <td>
                             <p>ÖĞRENCİ NUMARASI (KOCAELİ  ÜNİVERSİTESİ ÖĞRENCİLERİ İÇİN):{{$ogrenci_no}}</p>
                        </td>
                      </tr>

                      <tr>
                        <td>
                             <p>HALEN KAYITLI OLDUĞU YÜKSEKÖĞRETİM KURUMUNA YERLEŞTİRİLDİĞİ YIL:</p>
                        </td>
                      </tr>

                      <tr>
                        <td>
                             <p>HALEN KAYITLI OLUNAN PROGRAMA YERLEŞTİRMEDE KULLANILAN PUAN TÜRÜ VE PUANI	:</p>
                        </td>
                      </tr>

                      <tr>
                        <td>
                             <p>ZORUNLU HAZIRLIK SINIFI BULUNAN PROGRAMLARA BAŞVURAN ADAYLAR İÇİN YABANCI DİL PUANI VE SINAV TÜRÜ	:</p>
                        </td>
                      </tr>

                    </tbody>
                  </table>


                  <!---IV – ADAYIN BAŞVURDUĞU YÜKSEKÖĞRETİM PROGRAMINA İLİŞKİN BİLGİLER-->


                  <!---IV – ADAYIN BAŞVURDUĞU YÜKSEKÖĞRETİM PROGRAMINA İLİŞKİN BİLGİLER-->


                  <table >
                      <thead>
                        <tr>
                          <th>
                            <p >IV – ADAYIN BAŞVURDUĞU YÜKSEKÖĞRETİM PROGRAMINA İLİŞKİN BİLGİLER</p>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                               <p>FAKÜLTE / YÜKSEKOKUL/MYO.  ADI	  :...........</p>
                          </td>
                        </tr>
                        <tr>
                          <td>
                               <p>BÖLÜM / PROGRAM ADI:</p>
                          </td>
                        </tr>

                        <tr>
                          <td>
                               <p>ÖĞRETİM TÜRÜ: I.ÖĞRETİM <img src="https://icon-library.com/images/checkbox-icon-png/checkbox-icon-png-29.jpg" alt="" width="10px" height="10px">    II.ÖĞRETİM <img src="https://icon-library.com/images/checkbox-icon-png/checkbox-icon-png-7.jpg" alt="" width="10px" height="10px"></p>
                          </td>
                        </tr>

                        <tr>
                          <td>
                               <p>BAŞVURULAN PROGRAMIN HALEN KAYITLI OLUNAN PROGRAMA YERLEŞTİRME YAPILDIĞI PUAN TÜRÜ VE PUANI	: </p>
                          </td>
                        </tr>

                        <tr>
                          <td>
                               <p>Beyan ettiğim bilgilerin veya belgelerin gerçeğe aykırı olması veya daha önce yatay geçiş yapmış olmam halinde hakkımda cezai işlemlerin yürütüleceğini ve kaydım yapılmış olsa dahi silineceğini bildiğimi kabul ediyorum.</p>
                          </td>
                        </tr>

                        <tr>

                          <td>
                               <p>TARİHİ: .../..../....</p>
                          </td>

                          <td>
                               <p>Adayın Adı Soyadı: {{$name}}<br>İmzası:</p>
                          </td>
                        </tr>

                      </tbody>
                    </table>












        </div>



    </div>




</body>
</html>
