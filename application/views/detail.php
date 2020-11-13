<div class="container">

    <h1>Detail Mahasiswa</h1><br>

    <table>
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td><?= $mahasiswa['nim'] ?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?= $mahasiswa['nama']; ?></td>
        </tr>
    </table>

    <br>
    <a href="<?= site_url('mahasiswa') ?>">Kembali</a>

</div>