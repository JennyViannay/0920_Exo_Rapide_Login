<?php require 'head.php'; 

if(!isset($_SESSION['name']) && empty($_SESSION['name'])){
    header('Location: login.php');
}



?>


<div class="container">
    <?php if (isset($_SESSION['name'])) {
        ?> <strong>Hello <?= $_SESSION['name'] ?></strong>
        <?php } else { ?>
            <strong> Hello Wilder</strong>
    <?php } ?>
</div> 

<?php require 'footer.php'; ?>
