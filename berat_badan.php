<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>BERAT BADAN</title>
  </head>
  <style>
       body{
        min-height: 98vh;
        background-image: linear-gradient(to right top,#845EC2,#D65DB1,#FF6F91,#FF9671,#FFC75F,#F9F871);
        }
  </style>
  <body>
    <h1></h1>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="home.html">Aferil_Y</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Lainnya
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="berat_badan.php">Berat Badan</a>
          <a class="dropdown-item" href="zodiak.php">Meramal Zodiak(musyrik)</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

<br>

<div class="container">
    <h2>Indeks Massa Badan</h2>
        <div class="row my-4">
            <div class="col-5">
                <form method="post" class="form">
                <div class="form-group">
                        <label for="tinggi">Masukkan Nama</label>
                        <input name="tb" type="text" class="form-control" id="tinggi" aria-describedby="tinggi" placeholder="Masukkan disini">
                    </div>
                    <div class="form-group">
                        <label for="tinggi">Masukkan Tinggi Badan</label>
                        <input name="tb" type="text" class="form-control" id="tinggi" aria-describedby="tinggi" placeholder="Masukkan Disini">
                    </div>
                    <div class="form-group">
                        <label for="berat">Masukkan Berat Badan</label>
                        <input name="bb" type="text" class="form-control" id="berat" placeholder="Masukkan Disini">
                    </div>        
                    <div class="form-group">
                        <label for="jeniskelamin">Jenis Kelamin</label>
                            <select name="jk" class="form-control">
                                <option value="">Pilih Disini</option>
                                <option value="laki-laki">Laki-Laki</option>
                                <option value="perempuan">Perempuan</option>
                                <option value="perempuan">Transgender</option>
                            </select>                    
                    </div>
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </form>
            </div>
            <div class="col">
            <?php
                if(isset($_POST['submit'])){
                $bb = $_POST['bb'];
                $tb = $_POST['tb'] / 100;
                $jk = $_POST['jk'];
                $bmi = $bb / ($tb * $tb);

            if($bmi < 17)
            {
                echo "<div class=\"card text-light bg-info\">";
                echo "<h5 class=\"card-header\">Kekurusan</h5>";
                echo "<div class=\"card-body container\>";
                echo "<p class=\"card-text\">Kamu Harus Menambah Nafsu Makanmu Agar Mendapat Tubuh Yang Ideal</p>";
                echo "</div>";
                echo "</div>";
            } elseif ($bmi < 23)
            {
                echo "<div class=\"card text-light bg-success\">";
                echo "<h5 class=\"card-header\">Normal</h5>";
                echo "<div class=\"card-body container\>";
                echo "<p class=\"card-text\">Berat Badanmu Sudah Ideal Pertahan dan jaga Berat badanmu</p>";
                echo "</div>";
                echo "</div>";
            } elseif ($bmi < 27)
            {
                echo "<div class=\"card text-light bg-warning\">";
                echo "<h5 class=\"card-header\">Kegemukan</h5>";
                echo "<div class=\"card-body container\>";
                echo "<p class=\"card-text\">Kamu Harus Menurunkan Pola Makan Mu</p>";
                echo "</div>";
                echo "</div>";
            } elseif ($bmi > 27)
            {   
                echo "<div class=\"card text-light bg-danger\">";
                echo "<h5 class=\"card-header\">Obesitas</h5>";
                echo "<div class=\"card-body container\>";
                echo "<p class=\"card-text\">Berat Badanmu Sudah Berlebihan Sebaiknya Kamu Olahraga dan diet</p>";
                echo "</div>";
                echo "</div>";
            }
        }   
            ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
