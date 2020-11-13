<div class="container p-5">
    <?= form_open('mahasiswa/formAdd'); ?>
    <div class="form-group">
        <label for="exampleInputEmail1">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama">
        <?= form_error('nama'); ?>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">NIM</label>
        <input type="number" class="form-control" id="nim" name="nim">
        <?= form_error('nim'); ?>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <?= form_close(); ?>
</div>