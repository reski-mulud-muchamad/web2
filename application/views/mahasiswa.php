<div class="container">
    <h1><?= $title; ?></h1><br>

    <a href="<?= site_url('mahasiswa/formAdd'); ?>" class="btn btn-primary p-2 mb-2">Tambah Data Mahasiswa</a>

    <table border="1" width="85%" cellpadding="5" cellspacing="0" class="table table-bordered table-hover">
        <tr align"center">
            <th>No.</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>

        <?php if (is_array($mahasiswa) && count($mahasiswa)) : ?>

        <?php foreach ($mahasiswa as $mhs) : ?>

        <tr align="center">
            <td><?= $mhs['id'] ?></td>
            <td><?= $mhs['nim'] ?></td>
            <td><?= $mhs['nama'] ?></td>
            <td><a href="<?= site_url('mahasiswa/detail/') . $mhs['id'] ?>" class="badge badge-success">
                    <span class="fas fa-fw fa-info"></span>DETAIL
                </a> | <a href="<?= site_url('mahasiswa/delete/') . $mhs['id']; ?>"
                    onclick="confirm('apakah kamu yakin?')" class="badge badge-primary">EDIT</a> | <a href=""
                    class="badge badge-danger">DELETE</a></td>
        </tr>

        <?php endforeach; ?>

        <?php endif; ?>
    </table>
</div>