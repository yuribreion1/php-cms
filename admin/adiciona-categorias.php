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
                            Blank Page
                            <small>Subheading</small>
                        </h1>

                        <?php 
                            $categoria = $_POST["cat_nome"];
                            if (insereCategoria($connection, $categoria)) {
                                ?>
                                <p class="alert alert-success">Categoria adicionada com nome <?= $categoria ?></p>
                            <?php } else { ?>
                                <p class="alert alert-danger">Categoria não adicionar</p>
                            <?php } ?>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include "includes/footer.php"; ?>
