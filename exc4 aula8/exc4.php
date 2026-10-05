<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];

    $_SESSION["nome"] = $nome;

    header("Location: boasvindas.php");
    exit;
}

?>
