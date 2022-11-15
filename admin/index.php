<?php
include "./admin_parts/sidebar.php";
?>

<?php include "./admin_parts/header.php" ?>

<div class="container-fluid py-4">
  <div class="row">
    <div class="col-lg-7 position-relative z-index-2">
      <div class="card card-plain mb-4">
        <div class="card-body p-3">
          <div class="row">


          <?php  if(isset($_SESSION['success'])){ ?>

            <div class="alert alert-success alert-dismissible text-white" role="alert">
              <span class="text-sm"> <?= $_SESSION['success'] ?> </span>
              <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
<?php } ?>



            <div class="col-lg-6">



              <div class="d-flex flex-column h-100">
                <h2 class="font-weight-bolder mb-0">Admin Dashboard</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex"></div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</main>

<?php
require "./admin_parts/footer.php";
?>