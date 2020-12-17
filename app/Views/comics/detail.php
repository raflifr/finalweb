<?= $this->extend('layout/templating'); ?>

<?= $this->section('blockBody'); ?>
<div class="container">
    <br>
    <div class="container">

        <div class="card mb-3 w-100">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="<?= $comic['sampul']; ?>" class="card-img " alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <br>
                        <h5 class="card-title"><?= $comic['judul']; ?></h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted"><?= $comic['updated_at']; ?></small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>