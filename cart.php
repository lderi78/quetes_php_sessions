<?php 
session_start();
require 'inc/head.php'; 
?>

<section class="cookies container-fluid">
    <div class="row">
        TODO : Display shopping cart items from $_SESSION here.
    </div>
    <?php 
    foreach ($_SESSION['cart'] as $product) {
        echo '<p>' . $product['name'] . '</p>';
    }
    ?>
</section>
<?php require 'inc/foot.php'; ?>
