<?php include('parts/header.php'); ?>

    <?php 
        if(isset($_POST["logOut"])) {
            logOut();
        }
    ?>

<div class="container">
    <div class="inner">
        <div class="image-log"><img src="./images/logo-code-academy.png" alt=""></div>
        <h1>Welcome to your Dashbord, <span><?= ucfirst($_SESSION['username']) ?></span></h1>
        <form action="" method="POST">
            <input type="submit" name="logOut" value="Log Out">
        </form>
    </div>
</div>

<?php include('parts/footer.php'); ?>