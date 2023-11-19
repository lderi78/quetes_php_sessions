<?php require 'inc/data/products.php'; ?>
<?php require 'inc/head.php'; ?>

<?php

// demarre une nouvelles session
// session_destroy();
// unset($_SESSION);
session_start();
var_dump($_SESSION['cart']);

// Verifie que add_to_cart est présent dans l'url.
if (isset($_GET['add_to_cart'])) {
    // stock le product id dans une variable
    $productId = $_GET['add_to_cart'];

    // le produit fait partie du tableau catalog ? 
    if (isset($catalog[$productId])) {
        
        // initialise un tableau pour la session
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }

        // Ajoute le produit au panier.
        $_SESSION['cart'][] = $catalog[$productId];
    }
}
?>



<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($catalog as $id => $cookie) { ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $cookie['name']; ?></h3>
                        <p><?= $cookie['description']; ?></p>
                        <a href="?add_to_cart=<?= $id; ?>" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </figcaption>
                </figure>
            </div>
        <?php } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
