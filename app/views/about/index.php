<div class="container py-4">
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <img src="<?= BASEURL.'/img/kiva.jpg' ?>" alt="Profile" width="50">
            <h1 class="display-5 fw-bold">About Me</h1>
            <p class="col-md-8 fs-4">
                Halo, Nama saya <?= $data['nama'] ;?>, <br>
                Umur saya <?= $data['umur']?> , <br>
                Memiliki Pekerjaan sebagai seorang <?= $data['pekerjaan']?>
            </p>
        </div>
    </div>
</div>