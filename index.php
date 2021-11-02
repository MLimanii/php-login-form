<?php include('parts/header.php'); 

if(!isLogIn()) {
    header('Location: login.php');
}else {
    header('Location: home.php');
}
?>

<?php include('parts/footer.php') ?>