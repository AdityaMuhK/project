<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
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

    <div id="sidebar">
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

    <div id="content">
        <div class="card mb-4 shadow">
            <div class="card-body d-flex justify-content-between align-items-center">
                <h1 class="text-4xl m-0">Dashboard</h1>
                <a type="button" onclick="confirmLogout()">
                    <i class="fas fa-sign-out-alt fa-2x text-danger"></i>
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card shadow bg-primary text-white shadow border-10 rounded">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div>
                            <i class="fas fa-door-closed mr-2" style="font-size: 60px;"></i>
                        </div>
                        <div class="ml-auto">Jumlah Kelas</div>
                        <span style="font-size: 24px;">
                            <?php echo $kelas ?>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card shadow bg-primary text-white shadow border-10 rounded">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div>
                            <i class="fas fa-file-invoice mr-2" style="font-size: 60px;"></i>
                        </div>
                        <div class="ml-auto">Jumlah Mapel</div>
                        <span style="font-size: 24px;">
                            <?php echo $mapel ?>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card shadow bg-primary text-white shadow border-10 rounded">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div>
                            <i class="fas fa-user mr-2" style="font-size: 60px;"></i>
                        </div>
                        <div class="ml-auto">Jumlah Siswa</div>
                        <span style="font-size: 24px;">
                            <?php echo $siswa ?>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card shadow bg-primary text-white shadow border-10 rounded">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div>
                            <i class="fas fa-user-tie mr-2" style="font-size: 60px;"></i>
                            <p class="m-0"></p>
                        </div>
                        <div class="ml-auto">Jumlah Guru</div>
                        <span style="font-size: 24px;">
                            <?php echo $guru ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <!-- LOGOUT -->
        <script>
            function confirmLogout() {
                Swal.fire({
                    title: 'Yakin mau LogOut?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "<?php echo base_url('auth/logout') ?>";
                    }
                });
            }
        </script>
        <script>
            function toggleSidebar() {
                var sidebar = document.getElementById("sidebar");
                var content = document.getElementById("content");
                sidebar.style.width = sidebar.style.width === "250px" ? "0" : "250px";
                content.style.marginLeft = content.style.marginLeft === "250px" ? "0" : "250px";
            }
        </script>
    </div>

</body>

</html>