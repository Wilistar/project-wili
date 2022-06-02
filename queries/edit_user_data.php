<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include '../databases/connection.php';

// menangkap data yang dikirim dari form edit
$id = $_POST['id'];
$email = $_POST['email'];
$name = $_POST['name'];
$school = $_POST['school'];
$phone_number = $_POST['phone_number'];
$address = $_POST['address'];
$user_image = $_POST['image'];

$query = mysqli_query ($connection, "UPDATE pengguna SET name='$name', email='$email', school='$school', 
address='$address', phone_number='$phone_number', image='$user_image' WHERE id='$id'");

    header("location:../pages/user/user_detail_user_page.php?id='$id'");

?>
