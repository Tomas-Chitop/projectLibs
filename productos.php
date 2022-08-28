<?php include("template/header.php") ?>

<!--DATA BASE-->
<?php

    include("administrador/config/bd.php");

    $sentenciaSQL = $conexion->prepare("SELECT * FROM libros");
    $sentenciaSQL->execute();
    $listaLibros=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>

<?php foreach($listaLibros as $libro) { ?>
<div class="col-md-3">

    <div class="card">
        <img class="card-img-top" src="./img/<?php echo $libro['imagen']; ?>" height="400px" alt="product_One">
        <div class="card-body">
            <h4 class="card-title"><?php echo $libro['nombre']; ?></h4>
            <a name="" id="" class="btn btn-primary" href="https://www.code.org" target="_blank" role="button">Ver más</a>
        </div>
    </div>

</div>
<?php } ?>


<?php include("template/footer.php") ?>