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
      tr:nth-child(even){background-color: rgb(28, 150, 3) }
    </style>        
  </head>
  <body>
      <nav class="navbar navbar-expand-md bg-light navbar-light fixed-top">
          <a href="#" class="navbar-brand"><img src="logo.png" style="width: 30px;">B191210075</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#secenek" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

        <div id="secenek" class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link active" href="index.html" class="nav link ml-15 text-white">HAKKINDA</a></li>
              <li class="nav-item"><a class="nav-link active" href="ozgecmis.html" class="nav link ml-15 text-white">ÖZGEÇMİŞ</a></li>
              <li class="nav-item dropdown">
                <a href="sehrim.html" class="nav-link dropdown-toggle ml-4 text-black" data-toggle="dropdown">ŞEHRİM</a>
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

      <div class="container-fluid" style="background-color: white;" id="iletisimYanit">
        <div class="row">
          <div class="col-sm-3" style="padding: 30px 50px 50px 70px;">
            <img src="logo2.jpg" alt="sau" height="10%" style="padding: 10px 10px 10px 40px;">
            <h3>B191210075</h3>
            <h4>Nur Sena Aytar</h4>
          </div>
          <div class="col-sm-8">
          <?php
        $ad=$_POST["adi"];
        $soyad=$_POST["soyadi"];
        $eposta = $_POST['email'];
        $telefon = $_POST['tel'];
        $mesaj = $_POST['aciklama'];
        $gunn = $_POST['gun'];
        $ayy = $_POST['ay'];
        $yill = $_POST['yil'];
        $sehirr = $_POST['sehir'];
        $dosya=$_POST['dosya'];


        echo "<table class='table table-striped' name='iletisimName' id='iletisimTablosu' border='1'>";

        echo "<tr>";
        echo "<th colspan='2'><b><center>İLETİŞİM BİLGİLERİ</center></b></th>";
        echo "</tr>";

        echo "<tr>";
        echo "<td><b>Adı </b></td>";
        echo "<td>$ad</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td><b>Soyadı</b></td>";
        echo "<td>$soyad</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td><b>Cinsiyet</b></td>";
        if(isset($_POST["cinsiyet"]))
        if($_POST["cinsiyet"]=="erkek") echo "<td>Erkek</td>";
        if($_POST["cinsiyet"]=="kadin") echo "<td>Kadın</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td><b>E-mail</b></td>";
        echo "<td>$eposta</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td><b>Telefon Numarası</b></td>";
        echo "<td>$telefon</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td><b>Yaşadığınız Yer </td>";
        echo "<td>$sehirr</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td><b>Doğum Tarihi</b></td>";
        echo "<td>$gunn / $ayy / $yill</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td><b>Dosya</b></td>";
        if(isset($_POST["dosya"]))
        if($_POST["dosya"]=="") echo "<td>Dosya bulunamadı</td>";
        else echo "<td>$dosya</td>";

        echo "<tr>";
        echo "<td><b>Açıklama </b> </td>";
        echo "<td>$mesaj</td>";
        echo "</tr>";

        echo "<br/><br/>";   

        echo "</table>";


        echo '<center><h5>Mesajınız Gönderildi! Teşekkürler.</h5></center>';
        echo '<center><h5>Yeni bir iletişim formu doldurmak için <a href="iletisim.html" target="_blank">tıklayınız</a>.</h5></center>';

      ?>
        </div>
        <div class="col-sm-1">
        </div>
              <br><br><br>
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