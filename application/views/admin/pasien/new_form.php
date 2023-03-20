<!DOCTYPE html>
<html lang="en">

<head>
    <?php //$this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

    <?php //$this->load->view("admin/_partials/navbar.php") ?>
    <div id="wrapper">

        <?php //$this->load->view("admin/_partials/sidebar.php") ?>

        <div id="content-wrapper">

            <div class="container-fluid">

                <?php //$this->load->view("admin/_partials/breadcrumb.php") ?>

                <?php if ($this->session->flashdata('success')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php endif; ?>

                <div class="card mb-3">
                    <div class="card-header">
                        <a href="<?php echo site_url('admin/pasien/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
                    </div>
                    <div class="card-body">

                        <form action="<?php echo site_url('admin/pasien/add') ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name">Nama*</label>
                                <input class="form-control <?php echo form_error('nama') ? 'is-invalid' : '' ?>" type="text" name="nama" placeholder="Nama Pasien" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('nama') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name">JK*</label>
                                <input class="form-control <?php echo form_error('jk') ? 'is-invalid' : '' ?>" type="text" name="jk" min="0" placeholder="Product jk" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('jk') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name">Alamat*</label>
                                <textarea class="form-control <?php echo form_error('alamat') ? 'is-invalid' : '' ?>" name="alamat" placeholder="alamat..."></textarea>
                                <div class="invalid-feedback">
                                    <?php echo form_error('alamat') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name">Agama*</label>
                                <input class="form-control <?php echo form_error('agama') ? 'is-invalid' : '' ?>" type="text" name="agama" min="0" placeholder="agama" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('agama') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name">No. HP*</label>
                                <input class="form-control <?php echo form_error('no_hp') ? 'is-invalid' : '' ?>" type="number" name="no_hp" min="0" placeholder="no_hp" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('no_hp') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name">Email*</label>
                                <input class="form-control <?php echo form_error('email') ? 'is-invalid' : '' ?>" type="email" name="email" min="0" placeholder="email" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('email') ?>
                                </div>
                            </div>

                            <input class="btn btn-success" type="submit" name="btn" value="Save" />
                        </form>

                    </div>

                    <div class="card-footer small text-muted">
                        * required fields
                    </div>


                </div>
                <!-- /.container-fluid -->

                <!-- Sticky Footer -->
                <?php //$this->load->view("admin/_partials/footer.php") ?>

            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /#wrapper -->


        <?php //$this->load->view("admin/_partials/scrolltop.php") ?>

        <?php //$this->load->view("admin/_partials/js.php") ?>

</body>

</html>