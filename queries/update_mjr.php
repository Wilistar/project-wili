<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include '../databases/connection.php';

// menangkap data yang dikirim dari form edit
if(!isset($_POST['id'])){
    $majority_name = $_POST['majority_name'];
    $majority_description = $_POST['majority_description'];
} else {
    $id = $_POST['id'];
    $majority_name = $_POST['majority_name'];
    $majority_description = $_POST['majority_description'];
}

$query = mysqli_query ($connection, "UPDATE majorities SET majority_name='$majority_name', majority_description='$majority_description' WHERE id_majority='$id'");

    header("location:../pages/admin/majority_detail_page.php?id='$id'");

?>
