<?php include('inc/header.php') ?>


      <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <h2 class="page-title">Edit Form</h2>
              <!-- <p class="text-muted">Demo for form control styles, layout options, and custom components for creating a wide variety of forms.</p> -->
              <div class="card shadow mb-4">
                <div class="card-header">
                  <strong class="card-title">Edit Form</strong>
                </div>
                <div class="card-body">
                  <?php echo form_open_multipart('welcome/update'.$getObject->row()->id_obj); ?>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group mb-3">
                        <label for="simpleinput">Name</label>
                        <input type="text" value="<?php echo $getObject->row()->name; ?>" name="name" id="simpleinput" class="form-control">
                      </div>
                      <div class="form-group mb-3">
                        <label for="example-email">Ship To</label>
                        <input type="text" value="<?php echo $getObject->row()->shipTo; ?>" id="example-email" name="shipTo" class="form-control" placeholder="Email">
                      </div>

                    </div> <!-- /.col -->
                    <div class="col-md-6">
                      <div class="form-group mb-3">
                        <label for="simpleinput">Phone</label>
                        <input type="text" value="<?php echo $getObject->row()->phone; ?>" id="simpleinput" name="phone" class="form-control">
                      </div>

                      <div class="form-group mb-3">
                        <label for="example-password"></label>
                        <button type="submit" class="btn mb-2 btn-primary btn-lg btn-block">Save Update</button>
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
