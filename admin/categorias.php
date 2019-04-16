<?php   include "./includes/header.php"; 
        include "../includes/db.php" ;
        
        $categorias = listarCategorias($connection);

        ?>
    <div id="wrapper">
        <!-- Navigation -->
 <?php include "includes/navigation.php"; ?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Gestão de categorias
                            <small>Yuri Breion</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Categorias
                            </li>
                        </ol>
                        <div class="col-sm-6">
                            <form action="adiciona-categorias.php" method="post">
                                <div class="form-group">
                                    <label for="cat_nome">Adicionar categoria</label>
                                    <input type="text" class="form-control" name="cat_nome" id="categoria" required>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Adicionar" name="enviar" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                        <!-- Fecha coluna -->
                        <div class="col-sm-6">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Remover</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                foreach ($categorias as $categoria) {
                            ?>
                                <tr>
                                    <td><?= $categoria['cat_id'] ?></td>
                                    <td><?= $categoria['cat_nome'] ?></td>
                                    <td>
                                        <a href="remover-categorias.php?cat_id=<?= $categoria['cat_id'] ?>" class="fas fa-trash-alt" uk-icon="trash"></a>
                                    </td>           
                                </tr>
                            <?php } 
                            ?>
                                <!-- Itens adicionados dinamicamente -->
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include "./includes/footer.php"; ?>
