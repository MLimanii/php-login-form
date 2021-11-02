<?php include('parts/header.php');

    if(isLogIn()) {
        header('Location: home.php');
    }
    
    $success = true;
    if(isset($_POST["logIn"])) {
        $success = logIn($_POST["username"], $_POST["password"]);
    }

?>

<div class="container">
    <div class="inner">
        <div class="image-log"><img src="./images/logo-code-academy.png" alt=""></div>
        <form action="" method="POST">
            <input type="text" name="username" id="username" placeholder="Username">
            <input type="password" name="password" id="password" placeholder="Password">
            <input type="submit" name="logIn" value="Log In">
        </form>
        <a class="forget" href="#">Forgotten password?</a>
        <button>Create New Account</button>
        <?php if(!$success) : ?>
            <p>Invalid Username or Password</p>
        <?php endif ?>
    </div>
</div>


<?php include('parts/footer.php'); ?>