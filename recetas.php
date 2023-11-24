<?php include("template/cabecera.php"); ?>

<?php
include ("administrador/config/bd.php");

$sentenciaSQL= $conexion->prepare("SELECT * FROM recetas");
$sentenciaSQL->execute();
$listaRecetas=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>

<?php foreach($listaRecetas as $recetas) {?>
<div class="col-md-3">
<div class="card">
<img class="card-img-top" src="./img/<?php echo $recetas['imagen']; ?>" alt="" > 
<div class="card-body">
<h4 class="card-title"><?php echo $recetas['nombre'];?></h4>
<a name="" id="" class="btn btn-primary" href="#" role="button">Ver más</a>
</div>
</div>
</div> 


<?php } ?>





<!-- <div class="col-md-3">
    
</div>

<div class="card">
    <img class="card-img-top" src="https://www.elespectador.com/resizer/ZR7vtswfRS7XzOEqZTXH2NEvSCs=/525x350/filters:quality(60):format(jpeg)/cloudfront-us-east-1.images.arcpublishing.com/elespectador/QTYPORHSEJHMRGQKR765H3BASA.jpg" alt="">
    <div class="card-body">
        <h4 class="card-title">Margarita</h4>
        <p class="card-text">$20.000</p>
    </div>
</div>

<div class="col-md-3">
    
</div>

<div class="card">
    <img class="card-img-top" src="./imagenes/piña-colada.jpg" alt="">
    <div class="card-body">
        <h4 class="card-title">Piña Colada</h4>
        <p class="card-text">$25.000</p>
    </div>
</div>

<div class="col-md-3">
    
</div>

<div class="card">
    <img class="card-img-top" src="./imagenes/cocoloco.jpg" alt="">
    <div class="card-body">
        <h4 class="card-title">Coco Loco</h4>
        <p class="card-text">$30.000</p>
    </div>
</div> -->

<?php include("template/pie.php"); ?>