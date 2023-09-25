<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('https://foto.data.kemdikbud.go.id/getImage/20328874/6.jpg'); /* Ganti 'url_gambar_anda.jpg' dengan URL gambar pegunungan atau sungai dari Google */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 50px;
            border-radius: 10px;
            margin-top: 50px;
        }
    </style>
</head>

<body>
    <div class="container text-center">
        <img src="https://binusasmg.sch.id/ppdb/logobinusa.png" alt="Logo SMK Bina Nusantara" width="200"> <!-- Ganti 'url_logo_smk_bina_nusantara.png' dengan URL logo dari Google -->
        <h1>Selamat Datang di SMK Bina Nusantara</h1>
        <p>Silakan login untuk melanjutkan</p>
        <a href="<?php echo base_url('auth'); ?>" class="btn btn-primary">Login/Register Dahulu</a>
    </div>
</body>

</html>
