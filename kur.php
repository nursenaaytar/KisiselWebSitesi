<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>B191210075 Nur Sena Aytar</title>
    <style>
    table {
        border-collapse: collapse;
        width: 100%;

      }

      th, td {
        text-align: center;
        padding: 8px;
        color: white;
      }

      tr:nth-child(even){background-color: rgb(166, 202, 35) }

      th {
        background-color: #4CAF50;
        color: white;
      }
    </style>
  </head>
  <body>
      <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
          <a href="#" class="navbar-brand"><img src="logo.png" style="width: 30px;">B191210075</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#secenek" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

        <div id="secenek" class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link active" href="index.html" class="nav link ml-15 text-white">HAKKINDA</a></li>
                <li class="nav-item"><a class="nav-link active" href="ozgecmis.html" class="nav link ml-15 text-white">ÖZGEÇMİŞ</a></li>
                <li class="nav-item dropdown">
                <a href="sehrim.html" class="nav-link dropdown-toggle ml-4 text-white" data-toggle="dropdown">ŞEHRİM</a>
                <div class="dropdown-menu">
                  <a href="sehrim.html" class="dropdown-item">Bartın</a>
                  <a href="amasraMuzesi.html" class="dropdown-item">Amasra Müzesi </a>
                  <a href="gurcuolukMagarasi.html" class="dropdown-item">Gürcüoluk Mağarası </a>
                  <a href="tavsanAdasi.html" class="dropdown-item">Tavşan Adası </a>
                  <a href="amasraCekicilerCarsisi.html" class="dropdown-item">Amasra Çekiciler Çarşısı </a>
                  <a href="inkumuPlaji.html" class="dropdown-item">İnkumu Plajı </a>
                </div>
              </li>
                <li class="nav-item"><a class="nav-link active" href="mirasimiz.html" class="nav link ml-4 text-white">MİRASIMIZ</a></li>
                <li class="nav-item"><a class="nav-link active" href="ilgiAlanlarim.html" class="nav link ml-4 text-white">İLGİ ALANLARIM</a></li>
                <li class="nav-item"><a class="nav-link active" href="iletisim.html" class="nav link ml-4 text-white">İLETİŞİM</a></li>
                <li class="nav-item"><a class="nav-link active" href="login.html" class="nav link ml-4 text-white">LOGIN</a></li>
                
            </ul>
        </div>
      </nav>

      <br><br><br>

      <div class="container">
      <?php 

        $kurlar=simplexml_load_file("https://www.tcmb.gov.tr/kurlar/today.xml");

        $dolarForexAlis=$kurlar->Currency[0]->ForexBuying;
        $dolarForexSatis=$kurlar->Currency[0]->ForexSelling;
        $dolarEfektifAlis=$kurlar->Currency[0]->BanknoteBuying;
        $dolarEfektifSatis=$kurlar->Currency[0]->BanknoteSelling;

        $avustralyaDolarForexAlis=$kurlar->Currency[1]->ForexBuying;
        $avustralyaDolarForexSatis=$kurlar->Currency[1]->ForexSelling;
        $avustralyaDolarEfektifAlis=$kurlar->Currency[1]->BanknoteBuying;
        $avustralyaDolarEfektifSatis=$kurlar->Currency[1]->BanknoteSelling;

        $danimarkaKronuForexAlis=$kurlar->Currency[2]->ForexBuying;
        $danimarkaKronuForexSatis=$kurlar->Currency[2]->ForexSelling;
        $danimarkaKronuEfektifAlis=$kurlar->Currency[2]->BanknoteBuying;
        $danimarkaKronuEfektifSatis=$kurlar->Currency[2]->BanknoteSelling;

        $euroForexAlis=$kurlar->Currency[3]->ForexBuying;
        $euroForexSatis=$kurlar->Currency[3]->ForexSelling;
        $euroEfektifAlis=$kurlar->Currency[3]->BanknoteBuying;
        $euroEfektifSatis=$kurlar->Currency[3]->BanknoteSelling;

        $ingilizSterliniForexAlis=$kurlar->Currency[4]->ForexBuying;
        $ingilizSterliniForexSatis=$kurlar->Currency[4]->ForexSelling;
        $ingilizSterliniEfektifAlis=$kurlar->Currency[4]->BanknoteBuying;
        $ingilizSterliniEfektifSatis=$kurlar->Currency[4]->BanknoteSelling;

        $rusRublesiForexAlis=$kurlar->Currency[14]->ForexBuying;
        $rusRublesiForexSatis=$kurlar->Currency[14]->ForexSelling;
        $rusRublesiEfektifAlis=$kurlar->Currency[14]->BanknoteBuying;
        $rusRublesiEfektifSatis=$kurlar->Currency[14]->BanknoteSelling;

        $iranRiyaliForexAlis=$kurlar->Currency[15]->ForexBuying;
        $iranRiyaliForexSatis=$kurlar->Currency[15]->ForexSelling;
        $iranRiyaliEfektifAlis=$kurlar->Currency[15]->BanknoteBuying;
        $iranRiyaliEfektifSatis=$kurlar->Currency[15]->BanknoteSelling;

        $suudiArabistanRiyaliForexAlis=$kurlar->Currency[10]->ForexBuying;
        $suudiArabistanRiyaliForexSatis=$kurlar->Currency[10]->ForexSelling;
        $suudiArabistanRiyaliEfektifAlis=$kurlar->Currency[10]->BanknoteBuying;
        $suudiArabistanRiyaliEfektifSatis=$kurlar->Currency[10]->BanknoteSelling;

        $japonYeniForexAlis=$kurlar->Currency[11]->ForexBuying;
        $japonYeniForexSatis=$kurlar->Currency[11]->ForexSelling;
        $japonYeniEfektifAlis=$kurlar->Currency[11]->BanknoteBuying;
        $japonYeniEfektifSatis=$kurlar->Currency[11]->BanknoteSelling;

        $dolarForexAlis=str_replace(".", ",", $dolarForexAlis);
        $dolarForexSatis=str_replace(".", ",", $dolarForexSatis);
        $dolarEfektifAlis=str_replace(".", ",", $dolarEfektifAlis);
        $dolarEfektifSatis=str_replace(".", ",", $dolarEfektifSatis);

        $avustralyaDolarForexAlis=str_replace(".", ",", $avustralyaDolarForexAlis);
        $avustralyaDolarForexSatis=str_replace(".", ",", $avustralyaDolarForexSatis);
        $avustralyaDolarEfektifAlis=str_replace(".", ",", $avustralyaDolarEfektifAlis);
        $avustralyaDolarEfektifSatis=str_replace(".", ",", $avustralyaDolarEfektifSatis);

        $danimarkaKronuForexAlis=str_replace(".", ",", $danimarkaKronuForexAlis);
        $danimarkaKronuForexSatis=str_replace(".", ",", $danimarkaKronuForexSatis);
        $danimarkaKronuEfektifAlis=str_replace(".", ",", $danimarkaKronuEfektifAlis);
        $danimarkaKronuEfektifSatis=str_replace(".", ",", $danimarkaKronuEfektifSatis);

        $euroForexAlis=str_replace(".", ",", $euroForexAlis);
        $euroForexSatis=str_replace(".", ",", $euroForexSatis);
        $euroEfektifAlis=str_replace(".", ",", $euroEfektifAlis);
        $euroEfektifSatis=str_replace(".", ",", $euroEfektifSatis);

        $ingilizSterliniForexAlis=str_replace(".", ",", $ingilizSterliniForexAlis);
        $ingilizSterliniForexSatis=str_replace(".", ",", $ingilizSterliniForexSatis);
        $ingilizSterliniEfektifAlis=str_replace(".", ",", $ingilizSterliniEfektifAlis);
        $ingilizSterliniEfektifSatis=str_replace(".", ",", $ingilizSterliniEfektifSatis);

        $rusRublesiForexAlis=str_replace(".", ",", $rusRublesiForexAlis);
        $rusRublesiForexSatis=str_replace(".", ",", $rusRublesiForexSatis);
        $rusRublesiEfektifAlis=str_replace(".", ",", $rusRublesiEfektifAlis);
        $rusRublesiEfektifSatis=str_replace(".", ",", $rusRublesiEfektifSatis);

        $iranRiyaliForexAlis=str_replace(".", ",", $iranRiyaliForexAlis);
        $iranRiyaliForexSatis=str_replace(".", ",", $iranRiyaliForexSatis);
        $iranRiyaliEfektifAlis=str_replace(".", ",", $iranRiyaliEfektifAlis);
        $iranRiyaliEfektifSatis=str_replace(".", ",", $iranRiyaliEfektifSatis);

        $suudiArabistanRiyaliForexAlis=str_replace(".", ",", $suudiArabistanRiyaliForexAlis);
        $suudiArabistanRiyaliForexSatis=str_replace(".", ",", $suudiArabistanRiyaliForexSatis);
        $suudiArabistanRiyaliEfektifAlis=str_replace(".", ",", $suudiArabistanRiyaliEfektifAlis);
        $suudiArabistanRiyaliEfektifSatis=str_replace(".", ",", $suudiArabistanRiyaliEfektifSatis);

        $japonYeniForexAlis=str_replace(".", ",", $japonYeniForexAlis);
        $japonYeniForexSatis=str_replace(".", ",", $japonYeniForexSatis);
        $japonYeniEfektifAlis=str_replace(".", ",", $japonYeniEfektifAlis);
        $japonYeniEfektifSatis=str_replace(".", ",", $japonYeniEfektifSatis);

        echo "<h1>Güncel Piyasa Bilgileri</h1>";

        echo "<table class='table table-striped' name='kurName' id='kurTablosu' border='1'>";

        echo "<tr>";
        echo "<th>Döviz Cinsi</th>";
        echo "<th>Döviz Alış</th>";
        echo "<th>Döviz Satış</th>";
        echo "<th>Efektif Alış</th>";
        echo "<th>Efektif Satış</th>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Dolar</td>";
        echo "<td>$dolarForexAlis</td>";
        echo "<td>$dolarForexSatis</td>";
        echo "<td>$dolarEfektifAlis</td>";
        echo "<td>$dolarEfektifSatis</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Avustralya Doları</td>";
        echo "<td>$avustralyaDolarForexAlis</td>";
        echo "<td>$avustralyaDolarForexSatis</td>";
        echo "<td>$avustralyaDolarEfektifAlis</td>";
        echo "<td>$avustralyaDolarEfektifSatis</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Danimarka Kronu</td>";
        echo "<td>$danimarkaKronuForexAlis</td>";
        echo "<td>$danimarkaKronuForexSatis</td>";
        echo "<td>$danimarkaKronuEfektifAlis</td>";
        echo "<td>$danimarkaKronuEfektifSatis</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Euro</td>";
        echo "<td>$euroForexAlis</td>";
        echo "<td>$euroForexSatis</td>";
        echo "<td>$euroEfektifAlis</td>";
        echo "<td>$euroEfektifSatis</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>İngiliz Sterlini</td>";
        echo "<td>$ingilizSterliniForexAlis</td>";
        echo "<td>$ingilizSterliniForexSatis</td>";
        echo "<td>$ingilizSterliniEfektifAlis</td>";
        echo "<td>$ingilizSterliniEfektifSatis</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Suudi Arabistan Riyali</td>";
        echo "<td>$suudiArabistanRiyaliForexAlis</td>";
        echo "<td>$suudiArabistanRiyaliForexSatis</td>";
        echo "<td>$suudiArabistanRiyaliEfektifAlis</td>";
        echo "<td>$suudiArabistanRiyaliEfektifSatis</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Japon Yeni</td>";
        echo "<td>$japonYeniForexAlis</td>";
        echo "<td>$japonYeniForexSatis</td>";
        echo "<td>$japonYeniEfektifAlis</td>";
        echo "<td>$japonYeniEfektifSatis</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>Rus Rublesi</td>";
        echo "<td>$rusRublesiForexAlis</td>";
        echo "<td>$rusRublesiForexSatis</td>";
        echo "<td>$rusRublesiEfektifAlis</td>";
        echo "<td>$rusRublesiEfektifSatis</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>İran Riyali</td>";
        echo "<td>$iranRiyaliForexAlis</td>";
        echo "<td>$iranRiyaliForexSatis</td>";
        echo "<td>$iranRiyaliEfektifAlis</td>";
        echo "<td>$iranRiyaliEfektifSatis</td>";
        echo "</tr>";

        echo "</table>";

        ?>

        <br><br><br><br><br><br>
          <footer>
          <p>Copyright © 2021 Nur Sena Aytar</p>
          </footer>

       </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>