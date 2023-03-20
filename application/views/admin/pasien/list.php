<!DOCTYPE html>
<html lang="en">

<head>
    <?php //$this->load->view('admin/_partials/head.php') 
    ?>
</head>

<body id="page-top">

    <?php //$this->load->view('admin/_partials/sidebar.php') 
    ?>

    <div id="wrapper">
        <div class="container-fluid">
            <?php //$this->load->view('admin/_partials/breadcrumb.php') 
            ?>

            <!-- DataTables -->
            <div class="card mb-3">
                <div class="card-header">
                    <a href="<?php echo site_url('admin/pasien/add') ?>"><i class="fas fa-plus"></i> Add New</a>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>JK</th>
                                    <th>Alamat</th>
                                    <th>Agama</th>
                                    <th>No. HP</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($pasien as $_pasien) : ?>
                                    <tr>
                                        <td width="150">
                                            <?php echo $_pasien->nama ?>
                                        </td>
                                        <td>
                                            <?php echo $_pasien->jk ?>
                                        </td>
                                        <td class="small">
                                            <?php echo substr($_pasien->alamat, 0, 120)  ?>...
                                        </td>
                                        <td>
                                            <?php echo $_pasien->agama ?>
                                        </td>
                                        <td>
                                            <?php echo $_pasien->no_hp ?>
                                        </td>
                                        <td>
                                            <?php echo $_pasien->email ?>
                                        </td>
                                        <td width="250">
                                            <a href="<?php echo site_url('admin/pasien/edit/' . $_pasien->id_pasien) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                                            <a href="<?php echo site_url('admin/pasien/delete/' . $_pasien->id_pasien) ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
                                        </td>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->

            <!-- Sticky Footer -->
            <?php //$this->load->view("admin/_partials/footer.php") 
            ?>

        </div>
    </div>

    <?php //$this->load->view("admin/_partials/scrolltop.php") 
    ?>
    <?php //$this->load->view("admin/_partials/modal.php")
    ?>

    <?php //$this->load->view("admin/_partials/js.php") 
    ?>

</body>

</html>