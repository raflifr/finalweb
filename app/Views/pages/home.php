<?= $this->extend('layout/templating'); ?>

<?= $this->section('blockBody'); ?>

<div class="container">

    <div class="row">
        <div class="container col-md-8">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="carousel-item active" style="">

                        <a href="#">
                            <img class="d-block w-100" src="https://cdn.myanimelist.net/images/manga/3/31522.jpg" alt="First slide">

                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="#">
                            <img class="d-block w-100" src="https://cdn.myanimelist.net/images/manga/3/179882.jpg" alt="Second slide">

                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="#">
                            <img class="d-block w-100" src="https://cdn.myanimelist.net/images/manga/1/205549.jpg" alt="Third slide">
                        </a>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>


            <br>

            <div class="container shadow bg-white">

                <h4 class="text-black">Last Update</h4>

                <?php foreach ($comic as $c) : ?>
                    <a href="/comics/<?= $c['slug']; ?>">

                        <div class="card mb-3" style="max-width: 100%;" id="post">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="<?= $c['sampul']; ?>" class="card-img" alt="..." style="width: 100%; height: 100%;">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $c['judul']; ?></h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-muted">Last updated <?= $c['updated_at']; ?></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endforeach ?>


                <!-- 
                <div class="text-center">
                    <button type="button" class="btn btn-primary">Next</button>
                </div> -->
            </div>


        </div>


        <div class="container-sm col">
            <br>
            <div class="container shadow " id="right">
                <p>ads here</p>
            </div>


        </div>
    </div>

</div>
<?= $this->endSection(); ?>