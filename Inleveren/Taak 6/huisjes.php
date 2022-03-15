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
        <div class="row">
            <div class="col-12 col-md-4 mb-4 align-self-stretch">
                <div class="card">
                    <img class="card-img-top" src="images/<?php echo $result["cottage_img"]?>" alt="cottage_name"><!-- maak image en naam dynamisch -->
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $result["cottage_name"]?></h5> <!-- maak naam dynamisch -->
                        <p class="card-text"><?php echo $result["cottage_descr"]?></p> <!-- maak omschrijving dynamisch -->
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">€ <?php echo $result["cottage_price_a"]?> per nacht voor volwassenen</li><!-- maak prijs volwassenen dynamisch -->
                            <li class="list-group-item">€ <?php echo $result["cottage_price_c"]?> per nacht voor kinderen</li><!-- maak prijs kinderen dynamisch -->
                        </ul>
                        <a href="huisjes.php?cottageID=<?php echo $result["cottage_id"]; ?>" class="btn btn-secondary mt-2">Lees meer...</a><!-- maak href dynamisch -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include "footer.php";
?>


