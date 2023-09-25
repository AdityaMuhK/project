<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Siswa</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Comfortaa&display=swap');

        body {
            display: flex;
            font-family: 'Comfortaa', cursive;
            font-family: 'Permanent Marker', cursive;
            margin: 0;
            min-height: 100vh;
            background: linear-gradient(to bottom right, #66ccff 0%, #6666ff 100%);
            /* Light blue background */
        }

        #sidebar {
            background-color: #3399ff;
            /* Light blue sidebar */
            color: #fff;
            height: 100%;
            width: 250px;
            position: fixed;
            left: 0;
            top: 0;
            transition: 0.3s;
            padding-top: 20px;
        }

        #sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            color: #fff;
            display: block;
        }

        #sidebar a:hover {
            background-color: #3366ff;
            /* Darker blue on hover */
        }

        #content {
            flex: 1;
            margin-left: 250px;
            transition: 0.3s;
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div id="sidebar" class="col-md-3 col-lg-2 d-md-block">
                <h1><i class="fas fa-school mr-2"></i>School</h1>
                <a href="<?php echo base_url('admin') ?>">
                    <i class="fas fa-chart-line mr-2"></i> Dashboard
                </a>
                <a href="<?php echo base_url('admin/siswa') ?>">
                    <i class="fas fa-user mr-2"></i> Siswa
                </a>
                <a href="<?php echo base_url('admin/guru') ?>">
                    <i class="fas fa-chalkboard mr-2"></i> Guru
                </a>
            </div>

            <div id="content" role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div class="card mb-4 shadow">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <h1 class="text-4xl m-0">Detail Siswa</h1>
                        <a type="button" onclick="confirmLogout()">
                            <i class="fas fa-sign-out-alt fa-2x text-danger"></i>
                        </a>
                    </div>
                </div>
                <div class="container mt-5">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">Nama Siswa:
                                <?php echo $siswa->nama_siswa; ?>
                            </p>
                            <p class="card-text">NISN:
                                <?php echo $siswa->nisn; ?>
                            </p>
                            <p class="card-text">Gender:
                                <?php echo $siswa->gender; ?>
                            </p>
                            <p class="card-text">Kelas:
                                <?php echo tampil_full_kelas_byid($siswa->id_kelas) ?>
                            </p>
                            <!-- Tambahkan informasi detail lainnya sesuai kebutuhan -->
                        </div>
                        <a href="<?php echo base_url('admin/siswa'); ?>" class="btn btn-danger">Kembali</a>
                    </div>
                </div>

            </div>
        </div>
        <!-- Sertakan skrip JavaScript Bootstrap jika diperlukan -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>