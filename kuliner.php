
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>ADMINISTRATOR</title>
    <style>
        .nav-link:hover {
            background-color: gold;
            color: white !important;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">SELAMAT DATANG ADMIN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="ms-auto d-flex align-items-center">
                    <div class="icon">
                        <i class="fas fa-envelope-square me-3"></i>
                        <i class="fas fa-bell-slash me-3"></i>
                        <i class="fas fa-user-circle me-3"></i>
                        <i class="fas fa-sign-out-alt me-3"></i>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="row g-0 mt-5">
        <div class="col-md-2 bg-info mt-2 pt-4">
            <ul class="nav flex-column ms-3 mb-5">
                <li class="nav-item">
                    <a class="nav-link active text-white" href="dashboard.php"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="mahasiswa.php"><i class="fas fa-user-graduate me-2"></i>Daftar Mahasiswa</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="dosen.php"><i class="fas fa-chalkboard-teacher me-2"></i>Daftar Dosen</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="pegawai.php"><i class="fas fa-users me-2"></i>Daftar Pegawai</a>
                    <hr class="bg-secondary">
                </li>
                <li class="nav-item">
                <a class="nav-link text-white" href="kuliner.php"><i class="fas fa-utensils me-2"></i>Kuliner</a><hr class="bg-secondary">
                </li>
            </ul>
        </div>
        <div class="col-md-10 p-5 pt-2">
            <h3><i class="fas fa-utensils me-2"></i> Daftar Kuliner</h3>
            <hr>
            <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#tambahDataModal">
                <i class="fas fa-plus-circle me-2"></i>TAMBAH DATA KULINER
            </button>
            <!-- Modal Tambah Data -->
            <div class="modal fade" id="tambahDataModal" tabindex="-1" aria-labelledby="tambahDataLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tambahDataLabel">Tambah Data Kuliner</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="tambah_kln.php" method="POST">
                                <div class="mb-3">
                                    <label for="id_kuliner" class="form-label">ID Kuliner</label>
                                    <input type="text" class="form-control" id="id_kuliner" name="id_kuliner" required>
                                </div>
                                <div class="mb-3">
                                    <label for="nama_kuliner" class="form-label">Nama Kuliner</label>
                                    <input type="text" class="form-control" id="nama_kuliner" name="nama_kuliner" required>
                                </div>
                                <div class="mb-3">
                                    <label for="jenis_kuliner" class="form-label">Jenis Kuliner</label>
                                    <input type="text" class="form-control" id="jenis_kuliner" name="jenis_kuliner" required>
                                </div>
                                <div class="mb-3">
                                    <label for="deskripsi_kuliner" class="form-label">Deskripsi</label>
                                    <textarea class="form-control" id="deskripsi_kuliner" name="deskripsi_kuliner" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Edit Data -->
            <div class="modal fade" id="editDataModal" tabindex="-1" aria-labelledby="editDataLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editDataLabel">Edit Data Kuliner</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="ubah_kln.php" method="POST">
                                <input type="hidden" id="edit-id_kuliner" name="id_kuliner">
                                <div class="mb-3">
                                    <label for="edit-nama_kuliner" class="form-label">Nama Kuliner</label>
                                    <input type="text" class="form-control" id="edit-nama_kuliner" name="nama_kuliner" required>
                                </div>
                                <div class="mb-3">
                                    <label for="edit-jenis_kuliner" class="form-label">Jenis Kuliner</label>
                                    <input type="text" class="form-control" id="edit-jenis_kuliner" name="jenis_kuliner" required>
                                </div>
                                <div class="mb-3">
                                    <label for="edit-deskripsi_kuliner" class="form-label">Deskripsi Kuliner</label>
                                    <textarea class="form-control" id="edit-deskripsi_kuliner" name="deskripsi_kuliner" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">ID</th>
                        <th scope="col">NAMA KULINER</th>
                        <th scope="col">JENIS</th>
                        <th scope="col">DESKRIPSI</th>
                        <th scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'koneksi.php';
                    $query = mysqli_query($koneksi, "SELECT * FROM kuliner");
                    $no = 1;
                    while ($data = mysqli_fetch_assoc($query)) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data['id_kuliner']; ?></td>
                            <td><?php echo $data['nama_kuliner']; ?></td>
                            <td><?php echo $data['jenis_kuliner']; ?></td>
                            <td><?php echo $data['deskripsi_kuliner']; ?></td>
                            <td>
                                <button class="btn btn-success btn-sm me-1 edit-button"
                                        data-bs-toggle="modal" 
                                        data-bs-target="#editDataModal"
                                        data-id_kuliner="<?php echo $data['id_kuliner']; ?>"
                                        data-nama_kuliner="<?php echo $data['nama_kuliner']; ?>"
                                        data-jenis_kuliner="<?php echo $data['jenis_kuliner']; ?>"
                                        data-deskripsi_kuliner="<?php echo $data['deskripsi_kuliner']; ?>">
                                    <i class="fas fa-user-edit me-2"></i>EDIT
                                </button>
                                <a href="hapus_kln.php?id_kuliner=<?php echo $data['id_kuliner']; ?>" class="btn btn-danger btn-sm">
                                    <i class="fas fa-trash-alt"></i>HAPUS
                                </a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const editButtons = document.querySelectorAll('.edit-button');
        editButtons.forEach(button => {
            button.addEventListener('click', function () {
                const id_kuliner = this.getAttribute('data-id_kuliner');
                const nama_kuliner = this.getAttribute('data-nama_kuliner');
                const jenis_kuliner = this.getAttribute('data-jenis_kuliner');
                const deskripsi_kuliner = this.getAttribute('data-deskripsi_kuliner');

                document.getElementById('edit-id_kuliner').value = id_kuliner;
                document.getElementById('edit-nama_kuliner').value = nama_kuliner;
                document.getElementById('edit-jenis_kuliner').value = jenis_kuliner;
                document.getElementById('edit-deskripsi_kuliner').value = deskripsi_kuliner;
            });
        });
    });
</script>
</body>
</html>