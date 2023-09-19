<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guru</title>
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
                <h1 class="text-4xl m-0">Guru</h1>
                <a href="<?php echo base_url('auth/logout'); ?>">
                    <i class="fas fa-sign-out-alt fa-2x text-dark"></i>
                </a>
            </div>
        </div>

        <div class="card mb-4 shadow">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-title">Daftar Guru</h5>
                    <a href="<?php echo base_url('admin/add_guru') ?>" class="btn btn-success m-2">
                        <i class="fas fa-plus"></i> Tambah
                    </a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Guru</th>
                                <th>NIK</th>
                                <th>Gender</th>
                                <th>Mapel</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0;
                            foreach ($guru as $row):
                                $no++ ?>
                                <tr>
                                    <td>
                                        <?php echo $no ?>
                                    </td>
                                    <td>
                                        <?php echo $row->nama_guru ?>
                                    </td>
                                    <td>
                                        <?php echo $row->nik ?>
                                    </td>
                                    <td>
                                        <?php echo $row->gender ?>
                                    </td>
                                    <td>
                                        <?php echo tampil_full_mapel_byid($row->id_mapel) ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url('admin/ubah_guru/') . $row->id_guru ?>"
                                            class="btn btn-primary">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <button onClick="hapus(<?php echo $row->id_guru; ?>)" class="btn btn-danger">
                                            <i class="fas fa-trash"></i> Hapus
                                        </button>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        function hapus(id) {
            var yes = confirm('Yakin DI Hapus?');
            if (yes == true) {
                window.location.href = "<?php echo base_url('admin/hapus_guru/') ?>" + id;
            }
        }
    </script>
</body>

</html>