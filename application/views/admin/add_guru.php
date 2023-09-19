<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Guru</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            font-family: Arial, sans-serif;
            margin: 0;
            min-height: 100vh;
            background-color: #f0f8ff;
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
            background-color: #6495ed;
            /* Darker blue on hover */
        }

        #content {
            flex: 1;
            margin-left: 250px;
            transition: 0.3s;
            padding: 20px;
        }

        .toggle-btn {
            position: absolute;
            left: 250px;
            top: 20px;
            cursor: pointer;
            font-size: 24px;
        }

        .toggle-btn:hover {
            color: #555;
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <div id="sidebar">
        <div class="toggle-btn" onclick="toggleSidebar()">
            <i class="fas fa-bars"></i>
        </div>
        <a href="<?php echo base_url('admin') ?>">
            <i class="fas fa-chart-line mr-2"></i> Dashboard
        </a>
        <a href="<?php echo base_url('admin/siswa') ?>">
            <i class="fas fa-table mr-2"></i> Siswa
        </a>
        <a href="<?php echo base_url('admin/guru') ?>">
            <i class="fas fa-chalkboard mr-2"></i> Guru
        </a>
    </div>

    <div id="content">
        <div class="card mb-4 shadow">
            <div class="card-body d-flex justify-content-between align-items-center">
                <h1 class="text-4xl m-0">Tambah Guru</h1>
                <a href="<?php echo base_url('auth/logout'); ?>">
                    <i class="fas fa-sign-out-alt fa-2x text-dark"></i>
                </a>
            </div>
        </div>

        <div class="card mb-4 shadow">
            <div class="card-body">
                <h5 class="card-title">Tambah Guru</h5>
                <form action="<?php echo base_url('admin/aksi_add_guru') ?>" enctype="multipart/form-data"
                    method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nama">Nama Guru</label>
                                <input type="text" class="form-control" id="nama" name="nama"
                                    placeholder="Masukkan Nama Guru" required>
                            </div>
                            <div class="form-group">
                                <label for="nik">NIK</label>
                                <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <select class="form-control" id="gender" name="gender" required>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <label for="mapel">Mapel</label>
                            <select class="form-control" id="mapel" name="mapel" required>
                                <option selected>Pilih Mapel</option>
                                <?php foreach ($mapel as $row): ?>
                                    <option value="<?php echo $row->id ?>">
                                        <?php echo $row->nama_mapel ?>
                                    </option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>





</body>

</html>