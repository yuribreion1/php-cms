<?php   include "includes/header.php"; 
        include "../includes/db.php" ?>
    <div id="wrapper">
        <!-- Navigation -->
 <?php include "includes/navigation.php"; ?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Remoção de categoria
                            <small>Subheading</small>
                        </h1>

                        <?php 
                            $categoria = $_GET["cat_id"];
                            if (removerCategorias($connection, $categoria)) {
                                ?>
                                <p class="alert alert-success">Categoria removida</p>
                            <?php } else { ?>
                                <p class="alert alert-danger">Categoria não removida</p>
                            <?php } ?>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include "includes/footer.php"; ?>
