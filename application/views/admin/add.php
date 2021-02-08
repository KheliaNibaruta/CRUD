<?php include('inc/header.php') ?>


      <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <h2 class="page-title">Add Form</h2>
              <!-- <p class="text-muted">Demo for form control styles, layout options, and custom components for creating a wide variety of forms.</p> -->
              <div class="card shadow mb-4">
                <div class="card-header">
                  <strong class="card-title">Add Form</strong>
                </div>
                <div class="card-body">
                  <?php echo form_open_multipart('welcome/create'); ?>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group mb-3">
                        <label for="simpleinput">Name</label>
                        <input type="text"  name="name" id="simpleinput" class="form-control" placeholder="Name">
                      </div>
                      <div class="form-group mb-3">
                        <label for="example-email">Ship To</label>
                        <input type="text"  id="example-email" name="shipTo" class="form-control" placeholder="Ship To">
                      </div>

                    </div> <!-- /.col -->
                    <div class="col-md-6">
                      <div class="form-group mb-3">
                        <label for="simpleinput">Phone</label>
                        <input type="text" id="simpleinput" name="phone" class="form-control" placeholder="Phone">
                      </div>

                      <div class="form-group mb-3">
                        <label for="example-password"></label>
                        <button type="submit" class="btn mb-2 btn-primary btn-lg btn-block">Save</button>
                      </div>

                    </div> <!-- /.col -->
                  </div>
                  <?php form_close() ?>
                </div>
              </div> <!-- / .card -->

            </div> <!-- .col-12 -->
          </div> <!-- .row -->
        </div> <!-- .container-fluid -->
      </main> <!-- main -->

<?php include('inc/footer.php') ?>
