<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>B191210075 Nur Sena Aytar</title>
  </head>
  <body>
      <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
          <a href="#" class="navbar-brand"><img src="images/logo.png" style="width: 30px;">B191210075</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#secenek" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

        <div id="secenek" class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link active" href="#" class="nav link ml-15 text-white">HAKKINDA</a></li>
                <li class="nav-item"><a class="nav-link active" href="#" class="nav link ml-15 text-white">ÖZGEÇMİŞ</a></li>
                <li class="nav-item"><a class="nav-link active" href="#" class="nav link ml-15 text-white">ŞEHRİM</a></li>
                <li class="nav-item"><a class="nav-link active" href="#" class="nav link ml-4 text-white">MİRASIMIZ</a></li>
                <li class="nav-item"><a class="nav-link active" href="#" class="nav link ml-4 text-white">İLGİ ALANLARIM</a></li>
                <li class="nav-item"><a class="nav-link active" href="#" class="nav link ml-4 text-white">İLETİŞİM</a></li>

            </ul>
        </div>
      </nav>

      <br><br><br>

      <?php
 
      $kadi = $_POST['email'];
      $sifre = $_POST['sifre'];

      if ($kadi=="" or $sifre=="")
      {
        echo "Lütfen Tüm Alanları Doldurun!";	
      }
      else
      {
        if ($kadi=="b191210075@sakarya.edu.tr" && $sifre=="b191210075")
        {
          echo "Hoşgeldiniz  b191210075";	
        }
        else
        {
          echo "Hatalı Kullanıcı Adı veya Şifre Girdiniz.";	
          echo "<script>alert('Hatalı kullanıcı adı veya şifre girdiniz.')</script>";
          echo "<script>location.href='login.html'</script>";
        }
      }
        ?>













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