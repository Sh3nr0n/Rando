<?php

$connect = new mysqli("localhost", "root", "root", "reunion_island");
if ($connect->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $connect->connect_errno . ") " . $connect->connect_error;
} else {
    echo "connexion réussie";
}

mysqli_set_charset($connect, 'utf8');

//$test = "test affichage";

?>