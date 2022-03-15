<?php
include 'includes/database.php';
include 'includes/functions.php';
include "header.php";

$huis = $_GET['cottageID'];
$sql = "SELECT * FROM `cottages` WHERE `cottage_id` = $huis;";
$statement = $conn->query($sql);
$result = $statement->fetch(PDO::FETCH_BOTH);
?>
<section>
    <div class="container mt-4">
        <h1><?php echo $result["cottage_name"]?></h1>
        <div class="row">
            <div class="col">
                <div id="carouselExampleControls" class="carousel slide pointer-event" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <img src="images/<?php echo $result["cottage_img"]?>" class="d-block w-100" alt="ijmuiden.jpg"><!--src en alt dynamisch maken -->
                        </div>
                        <div class="carousel-item active">
                            <img src="images/<?php echo $result["cottage_img2"]?>" class="d-block w-100" alt="ijmuiden-strand.jpg"><!--src en alt dynamisch maken -->
                        </div>
                        <div class="carousel-item">
                            <img src="images/<?php echo $result["cottage_img3"]?>" class="d-block w-100" alt="ijmuiden-hottub.jpg"><!--src en alt dynamisch maken -->
                        </div>
                        <div class="carousel-item">
                            <img src="images/<?php echo $result["cottage_img4"]?>" class="d-block w-100" alt="ijmuiden-haard.jpg"><!--src en alt dynamisch maken -->
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col">
                <h5>Omschrijving</h5>
                <p><?php echo $result["cottage_descr"]?></p>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container mt-4 bg-light">
        <div class="row  px-4 py-4">
            <div class="col">
                faciliteiten (aparte file in includes)
            </div>

            <div class="col">
                <h4>Prijzen (per persoon per nacht)</h4>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Volwassenen: &euro; <?php echo $cottage["cottage_price_a"]?></li>
                    <li class="list-group-item">Kinderen: &euro; <?php echo $cottage["cottage_price_c"]?></li>
                </ul>
            </div>

            <div class="col">
                additions (aparte file in includes)
            </div>
        </div>
    </div>
</section>

<?php
include "footer.php";
?>


