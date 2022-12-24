<?php 
	session_start();
 
    if (!isset($_SESSION['username'])) {
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ruang Kreatif.</title>
    <link rel="stylesheet" href="stylehome.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>Ruang Kreatif.</a></div>
            <div class="menu">
                <ul>
                    <li><a href="#home">Menu</a></li>
                    <li><a href="#courses">Perhitungan Liter Cat</a></li>
                    <li><a href="#Jenis">Jenis Cat</a></li>
                    <li><a href="#contact">Hubungi Kami</a></li>
                    <li><a href="register.php" class="tbl-biru">Login/Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <!-- untuk home -->
        <section id="home">
        <img src="https://www.ruparupa.com/blog/wp-content/uploads/2021/09/3.-Cat-ruang-tamu-2-warna-dark-electric-blue-dan-putih.jpeg" width="500px"/>
            <div class="kolom">
                <p class="deskripsi">Design Rumah dengan Mudah #dirumahaja</p>
                <h2>Wujudkan Rumah Impian Anda</h2>
                <p>Kami memberikan warna dalam hidup anda, jika kami memberi warna pada dinding rumah anda. Hidupkan suasana rumah dengan warna berkualitas dan sesuai dengan gaya anda.</p>
            </div>
        </section>

        <!-- untuk Perhitungan -->
        <section id="courses">
            <div class="kolom">
                <p class="deskripsi">You Will Need This</p>
                <h2>Hitung Kebutuhan Cat Anda</h2>
                <p>Ingin dekorasi rumah? bosan dengan warna tembok yang itu-itu saja?. Sekarang menyesuaikan kebutuhan cat bisa dengan mudah. Sesuaikan kebutuhan cat anda dengan memasukkan data luas ruangan yang ingin didekorasi. </p>
                <p>Masukkan panjang tiap sisi dan tinggi ruangan anda kedalam satuan meter</p>
            </div>
            <div class="hitung">
                <table>
                    <thead>
                        <tr>
                            <th>Luas Ruangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Masukkan Sisi Pertama</td>
                        </tr>
                        <tr>
                            <td><input type="text" id="ipt_sisi1"></td>
                        </tr>
                        <tr>
                            <td>Masukkan Sisi Kedua</td>
                        </tr>
                        <tr>
                            <td><input type="text" id="ipt_sisi2"></td>
                        </tr>
                        <tr>
                            <td>Masukkan Tinggi Ruangan</td>
                        </tr>
                        <tr>
                            <td><input type="text" id="ipt_tinggi"></td>
                        </tr>
                        <tr>
                            <td><button onclick="hitung()">Hitung</button></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td>Banyak cat yang dibutuhkan per lapis(liter)</td>
                        </tr>
                        <tr>
                            <td><input type="text" id="opt_jumlah" disabled></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <script type="text/javascript" src="script.js"></script>
            </body>
            </html>
        </section>

 <!-- untuk Jenis-Jenis Cat -->
 <section id="Jenis">
    <div class="tengah">
        <div class="kolom">
            <p class="deskripsi">Jenis-Jenis Cat</p>
            <h2>Cat Tembok</h2>
            <p>Temukan Cat yang Anda Butuhkan!</p>
        </div>

        <div class="tutor-list">
            <div class="kartu-tutor">
                <img src="https://bursabangunan.com/wp-content/uploads/2020/02/Gambar-Harga-Cat-Nippon-Paint-Spot-Less.jpg"/>
                <p>Spot-Less</p>
            </div>
            <div class="kartu-tutor">
                <img src="https://bursabangunan.com/wp-content/uploads/2020/02/Gambar-Harga-Cat-Pippon-Paint-Eksterior-Weatherbond.jpg"/>
                <p>Weatherbond</p>
            </div>
            <div class="kartu-tutor">
                <img src="https://bursabangunan.com/wp-content/uploads/2020/02/Gambar-Harga-Cat-Nippon-Paint-Roadline-Paint.jpg"/>
                <p>Roadline</p>
            </div>
            <div class="kartu-tutor">
                <img src="https://bestlist.id/wp-content/uploads/2020/09/Cat-Tembok-Eksterior-Dulux-Weathershield.jpg"/>
                <p>Weathershield</p>
            </div>
        </div>
    </div>
</section>

    <div id="contact">
        <div class="wrapper">
            <div class="footer">
                <div class="footer-section">
                    <h3>About</h3>
                    <p>Ruang Kreatif adalah sebuah situs yang memberikan rekomendasi terbaik dan terpercaya dalam membantu dekorasi rumah dengan harapan dapat membantu setiap pengunjung untuk menemukan produk atau layanan dengan kualitas dan juga perhitungan terbaik dengan cara yang lebih mudah</p>
                </div>
                <div class="footer-section">
                    <h3>Contact</h3>
                    <p>Whatsapp : 09284337184</p>
                    <p>Email : ruangkreatif@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>