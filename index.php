<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Curriculum Vitae - Fani Mulyana Nasution</title>
        <!-- Link ke Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>

<body>
    <header class="bg-primary text-white text-center py-5">
        <!-- terdapat image/foto diri -->
        <img src="assets/foto.jpg" alt="Foto Diri" class="rounded-circle img-fluid" style="width: 150px;">
        <h1>Fani Mulyana Nasution</h1>
        <p>D3 Teknik Informatika</p>
    </header>

    <section id="deskripsi" class="container my-5">
        <h2 class="text-center mb-4">Deskripsi Diri</h2>
        <div class="row">
            <!-- terdapat 2 paragraf -->
            <div class="col-md-6">
                 <!-- terdapat text formating bold, italic -->
                <p>Perkenalkan nama saya <strong>Fani Mulyana Nasution</strong>. Saya tamatan D3 Teknik Informatika USU. Saya memiliki kemampuan <em>ms office, bahasa pemrograman, dan jaringan.</em></p>
            </div>
            <div class="col-md-6">
                <p>Saya juga memiliki kemampuan bekerjasama dengan baik, ribadi yang disiplin, bertanggung jawab, dan memiliki motivasi tinggi.</p>
            </div>
        </div>
    </section>

    <section id="Pendidikan" class="container my-5">
        <!-- terdapat tag heading dan komentar -->
        <h2 class="text-center mb-4">Pendidikan</h2>
        <!-- terdapat tabel -->
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nama Sekolah</th>
                    <th>Nilai/IPK</th>
                    <th>Tahun</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Universitas Sumatera Utara</td>
                    <td>IPK 3.62</td>
                    <td>2014-2017</td>
                </tr>
                <tr>
                    <td>SMA Negeri 3 Padangsidimpuan</td>
                    <td>8,7</td>
                    <td>2011-2014</td>
                </tr>
                <tr>
                    <td>SMP Negeri 2 Padangsidimpuan</td>
                    <td>8,4</td>
                    <td>2008-2011</td>
                </tr>
                <tr>
                    <td>SD Negeri 200222 Padangsidimpuan</td>
                    <td>8,7</td>
                    <td>2002-2008</td>
                </tr>
            </tbody>
        </table>
    </section>

    <section id="pengalaman" class="container my-5">
        <h2 class="text-center mb-4">Pengalaman Kerja</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Posisi</th>
                    <th>Perusahaan</th>
                    <th>Tahun</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Asisten Praktikum D3 Teknik Informatika USU</td>
                    <td>USU</td>
                    <td>2015-2017</td>
                </tr>
            </tbody>
        </table>
    </section>

    <section id="kemampuan" class="container my-5">
        <h2 class="text-center mb-4">Kemampuan</h2>
        <!-- terdapat list -->
        <ul>
            <li><a>Microsoft Office (Word, Excel, Powerpoint, Accsess)</a></li>
            <li><a>Programming (C, C++, PHP, MySQL, CSS, VB)</a></li>
            <li><a>Multimedia (Flash, Illustrator, Photoshop, Corel Draw)</a></li>
        </ul>
    </section>

    <!-- terdapat 3 gambar  -->
    <section class="container my-5">
        <h2 class="text-center mb-4">Sosial Media</h2>
        <div class="row">
            <div class="col-md-4">
                <img src="assets/foto1.png" alt="Foto 1" class="img-fluid rounded mb-4">
            </div>
            <div class="col-md-4">
                <img src="assets/foto2.png" alt="Foto 2" class="img-fluid rounded mb-4">
            </div>
            <div class="col-md-4">
                <img src="assets/foto3.png" alt="Foto3" class="img-fluid rounded mb-4">
            </div>
        </div>
    </section>

    <section id="kontak" class="container my-5">
        <ul>
            <li><a href="https://www.facebook.com" target="_blank">Facebook</a></li>
            <li><a href="https://www.instagram.com" target="_blank">Instagram</a></li>
            <li><a href="https://www.tiktok.com" target="_blank">TikTok</a></li>
        </ul>
    </section>
    <footer class="bg-dark text-white text-center py-4">
        <p>&copy; UTS Pemrograman Web I</p>
    </footer>

    <!-- Link ke Bootstrap JS dan Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>