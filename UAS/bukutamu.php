<!DOCTYPE html>
<html>
    <head>
        <title>Buku Tamu</title>
        <link rel="stylesheet" type="text/css" href="stylebukutamu.css">
    </head>
    <body>
        <div class="header">
            <h1 class="highlight">Buku Tamu 13log</h1>
        </div>
        <div class="top">
            <a href="http://localhost/daskom/UAS/home.html">Home</a>
            <a href="http://localhost/daskom/UAS/about.html">About</a>
            <a href="http://localhost/daskom/UAS/bukutamu.php">Buku Tamu</a>
            <a href="http://localhost/daskom/UAS/blog.html">Blog</a>
            <a href="https://www.instagram.com/tiaramals/">Contact</a>
        </div>
        <div class="kotak">
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
            Nama:<br>
            <input type="text" name="nama" size="40"><br><br>
            Alamat:<br>
            <textarea name="alamat" cols="30" rows="3"></textarea>
            <br><br>
            Jenis Kelamin:<br><br>
            Laki-laki <input type="radio" name="jenis_kelamin" value="L">
            Perempuan <input type="radio" name="jenis_kelamin" value="P"><br><br>
            No Hp:<br>
            <input type="number" name="no_hp" size="40"><br><br>
            Email:<br>
            <input type="text" name="email" size="40"><br><br>
            Kritik dan Saran:<br>
            <textarea name="kritik_saran" cols="30" rows="3"></textarea>
            <br><br>
            <input type="submit" value="Kirim">
            <input type="reset" value="Batal">

            <div class="php">
                <?php
                    if(isset($_POST['nama'])){
                        $nama = $_POST['nama'];
                        $alamat = $_POST['alamat'];
                        $jenis_kelamin = $_POST['jenis_kelamin'];
                        $no_hp = $_POST['no_hp'];
                        $email = $_POST['email'];
                        $kritik_saran = $_POST['kritik_saran'];
                        echo "
                        <p>Nama: $nama</p>
                        <p>Alamat: $alamat</p>
                        <p>Jenis Kelamin: $jenis_kelamin</p>
                        <p>No Hp: $no_hp</p>
                        <p>Email: $email</p>
                        <p>Kritik dan Saran: $kritik_saran</p>
                        <br>
                        <p><i>Terimakasih Atas Kunjungan Anda...</i></p>
                        ";
                    }
                ?>
            </div>
        </form>
        </div>
        <footer>
            <p align="center"><b>Copyright&copy2022TiaraMalsa</b></p>
            <br>
            <p align="right"><a href="http://localhost/daskom/UAS/bukutamu.php">Ke Atas</a></p>
        </footer>
    </body>
</html>