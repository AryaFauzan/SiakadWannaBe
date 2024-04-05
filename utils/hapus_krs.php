<?php

include_once("config.php");

$id = $_GET['id'];

$query = "DELETE FROM krs WHERE id=$id";

$result = mysqli_query($con, $query);

header('Location:../pages/KRS.php');

?>