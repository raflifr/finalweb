<?= $this->extend('layout/templating'); ?>

<?= $this->section('blockBody'); ?>
<div class="d-flex">

  <div class="container">
    <div class="container">
      <div class="row">
        <div class="container col-md-8">

          <div class="container-fluid crew-card-main mt-5">

            <div class="row">

              <?php foreach ($comic as $c) : ?>
                <a href="/comics/<?= $c['slug']; ?>">
                  <div class="col-md-2">

                    <div class="card" style="width: 10rem;">
                      <img src="<?= $c['sampul']; ?>" class="card-img-top" alt="..." style="width: 10rem">
                      <div class="card-body" style="height: 100%">

                        <p><?= $c['judul']; ?></p>
                      </div>
                    </div>
                  </div>

                </a>
              <?php endforeach ?>
            </div>



          </div>


        </div>

        <!-- left section -->

        <div class="container-sm col">
          <br>
          <div class="container shadow">
            <p>ads here</p>
          </div>


          <br>

        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>