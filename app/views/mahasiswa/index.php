<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Mahasiswa</h3>

            <ul class="list-group">
                <?php foreach($data['mhs'] as $mhs) :?>
                    <li class="list-group-item">
                        <?= $mhs['nama']; ?>
                        <a href="<?= BASEURL ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge bg-primary float-end">Detail</a>
                    </li>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
</div>