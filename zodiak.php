<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>ZODIAK</title>
  </head>
  <style>
       body{
        min-height: 98vh;
        background-image: linear-gradient(to right top,#845EC2,#009EFA,#00D2FC,#4FFBDF);
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
    <h2>Indeks Ramal Zodiak</h2>
        <div class="row my-4">
            <div class="col-5">
                    <form method="post" class="form">
                    <div class="form-group">
                        <label for="tinggi">Masukkan Nama</label>
                        <input name="tb" type="text" class="form-control" id="tinggi" aria-describedby="tinggi" placeholder="Masukkan disini">
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Pilih Tanggal Kelahiran Kamu</label>
                        <select name="tanggal" class="form-control">
                            <option value="">Pilih Disini</option>
                        <?php 
                        for ($i=1; $i <= 31 ; $i++) { 
                            echo "<option value=\"$i\">$i</option>";
                        }
                        ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="bulan">Pilih Bulan Kelahiran Kamu</label>
                        <select name="bulan" class="form-control">
                            <option value="">Pilih Disni</option>
                                <option value="jan">Januari</option>
                                <option value="feb">Februari</option>
                                <option value="mar">Maret</option>
                                <option value="apr">April</option>
                                <option value="mei">Mei</option>
                                <option value="jun">Juni</option>
                                <option value="jul">Juli</option>
                                <option value="agus">Agustus</option>
                                <option value="sep">September</option>
                                <option value="okt">Oktober</option>
                                <option value="nov">November</option>
                                <option value="des">Desember</option>
                        </select>
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
        if (isset($_POST['submit'])) {
        $bulan = $_POST['bulan'];
        $tanggal = $_POST['tanggal'];

        //menentukan zodiak
        if ($bulan == 'des' && $tanggal >= 21 || $bulan == 'jan' && $tanggal <= 19 ) {
            echo "<div class=\"card\">";
            echo "<h5 class=\"card-header\">Capricorn</h5>";
            echo "<div class=\"card-body\">";
            echo "<p class=\"card-text\">Sifat yang cukup menonjol dari mereka yang berzodiak Capricornus di antaranya mengutamakan kesuksesan, reputasi, jabatan, status, loyal, bijaksana, bertanggung jawab, takut akan hambatan, pesimis, berfikir sempit, rendah diri, serta khawatir yang berlebihan.</p>";
            echo "</div>";
            echo "</div>";
        } elseif ($bulan == 'jan' && $tanggal >= 20 || $bulan == 'feb' && $tanggal <= 18 ) {
            echo "<div class=\"card\">";
            echo "<h5 class=\"card-header\">Aquarius</h5>";
            echo "<div class=\"card-body\">";
            echo "<p class=\"card-text\">sifat yang cinta petualangan, jiwa kemanusiaannya yang tinggi, progresif, spontan, berjiwa sosial tinggi dan selalu ingin memberikan manfaat bagi orang disekitarnya.</p>";
            echo "</div>";
            echo "</div>";
        } elseif ($bulan == 'feb' && $tanggal >= 19 || $bulan == 'mar' && $tanggal <= 20 ) {
            echo "<div class=\"card\">";
            echo "<h5 class=\"card-header\">Pisces</h5>";
            echo "<div class=\"card-body\">";
            echo "<p class=\"card-text\">Sifat Pisces umumnya agak manja, romantis, punya kegemaran di bidang seni, setia, religius, selalu memegang teguh kepercayaan, risau, terkadang bingung, mudah kecewa, mengalah, mendengar kata hati, dan tidak konsisten.</p>";
            echo "</div>";
            echo "</div>";
        } elseif ($bulan == 'mar' && $tanggal >= 21 || $bulan == 'apr' && $tanggal <= 20 ) {
            echo "<div class=\"card\">";
            echo "<h5 class=\"card-header\">Aries</h5>";
            echo "<div class=\"card-body\">";
            echo "<p class=\"card-text\">sifat yang berani, memiliki daya juang, suka tantangan, percaya diri, punya inisiatif, dan mengutamakan tindakan.</p>";
            echo "</div>";
            echo "</div>";
        } elseif ($bulan == 'apr' && $tanggal >= 21 || $bulan == 'mei' && $tanggal <= 20 ) {
            echo "<div class=\"card\">";
            echo "<h5 class=\"card-header\">Taurus</h5>";
            echo "<div class=\"card-body\">";
            echo "<p class=\"card-text\">Sifat mereka yang berzodiak Taurus umumnya juga menyukai spiritualitas, menyukai seni, loyalitas, senang berbagi, tabah, suka traveling, dan mengutamakan kekayaan dan kemewahan./p>";
            echo "</div>";
            echo "</div>";
        } elseif ($bulan == 'mei' && $tanggal >= 21 || $bulan == 'jun' && $tanggal <= 20 ) {
            echo "<div class=\"card\">";
            echo "<h5 class=\"card-header\">Gemini</h5>";
            echo "<div class=\"card-body\">";
            echo "<p class=\"card-text\">Sifat zodiak ini umumnya komunikatif, punya kemampuan berbicara, kreatif, cerdas, ekstrovert atau bersikap terbuka.</p>";
            echo "</div>";
            echo "</div>";
        } elseif ($bulan == 'jun' && $tanggal >= 21 || $bulan == 'jul' && $tanggal <= 20 ) {
            echo "<div class=\"card\">";
            echo "<h5 class=\"card-header\">Cancer</h5>";
            echo "<div class=\"card-body\">";
            echo "<p class=\"card-text\">zodiak ini biasanya punyq sifat yang sabar, jujur, cerdas, sensitif, family man, takut akan perpisahan, mudah bersimpati, dan suka menolong.</p>";
            echo "</div>";
            echo "</div>";
        } elseif ($bulan == 'jul' && $tanggal >= 21 || $bulan == 'agu' && $tanggal <= 21 ) {
            echo "<div class=\"card\">";
            echo "<h5 class=\"card-header\">Leo</h5>";
            echo "<div class=\"card-body\">";
            echo "<p class=\"card-text\">sifat orang Leo ramah, senang mengobrol, pemurah, memiliki jiwa kepemimpinan, berbakat, berani, suka kemegahan dan keagungan, dan suka traveling.</p>";
            echo "</div>";
            echo "</div>";
        } elseif ($bulan == 'agu' && $tanggal >= 22 || $bulan == 'sep' && $tanggal <= 22 ) {
            echo "<div class=\"card\">";
            echo "<h5 class=\"card-header\">Virgo</h5>";
            echo "<div class=\"card-body\">";
            echo "<p class=\"card-text\">Zodiak ini punya elemen tanah dan termasuk kategori variabel sehingga sifat Virgo adalah pekerja keras, perfectionist, simple, senang melayani, percaya diri, dan fokus pada pekerjaan.</p>";
            echo "</div>";
            echo "</div>";
        } elseif ($bulan == 'sep' && $tanggal >= 23 || $bulan == 'okt' && $tanggal <= 22 ) {
            echo "<div class=\"card\">";
            echo "<h5 class=\"card-header\">Libra</h5>";
            echo "<div class=\"card-body\">";
            echo "<p class=\"card-text\">umumnya menyukai keseimbangan, harmonisasi, family man, mengutamakan kesetaraan, suka keadilan, suka hal-hal berbau seni, senang menolong, ceria, senang beraliansi, dan pandai berdiplomasi.</p>";
            echo "</div>";
            echo "</div>";
        } elseif ($bulan == 'okt' && $tanggal >= 23 || $bulan == 'nov' && $tanggal <= 22 ) {
            echo "<div class=\"card\">";
            echo "<h5 class=\"card-header\">Scorpio</h5>";
            echo "<div class=\"card-body\">";
            echo "<p class=\"card-text\">Zodiak ini masuk ke dalam kategori statis sehingga menghasilkan karakter dan sifat yang kreatif, memiliki keinginan yang kuat, stamina tinggi, suka kemewahan, dan senang membantu orang lain.</p>";
            echo "</div>";
            echo "</div>";
        } elseif ($bulan == 'nov' && $tanggal >= 23 || $bulan == 'des' && $tanggal <= 20 ) {
            echo "<div class=\"card\">";
            echo "<h5 class=\"card-header\">Sagitarius</h5>";
            echo "<div class=\"card-body\">";
            echo "<p class=\"card-text\"> sifatnya sangat optimis, suka tantangan, senang belajar, suka melakukan eksplorasi dan hal baru, bijaksana, memiliki tekad yang kuat, percaya diri.</p>";
            echo "</div>";
            echo "</div>";
        }
    }
        ?>
            </div>
        </div>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>