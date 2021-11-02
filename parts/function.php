<?php 

function isLogIn() {
    return isset($_SESSION["isLogged"]) ? true : false;
}

function logIn($username, $password) {
    if($username == USERNAME && $password == PASSWORD) {
        $_SESSION["isLogged"] = true;
        $_SESSION["username"] = USERNAME;
        header('Location: home.php');
    }else {
        return false;
    }
}

function logOut() {
    session_unset();
    session_destroy();

    header('Location: index.php');
}
?>