
<?php
// include database connection file
include_once("../databases/connection.php");

// Check if form is submitted for user update, then redirect to homepage after update$_POST=
$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['name'];
$school = $_POST['school'];
$phone_number = $_POST['phone_number'];
$address = $_POST['address'];

// update user data
$result = mysqli_query($connection, "INSERT INTO pengguna (`id`, `email`, `password`, `name`, `school`, `phone_number`, `address`, `image`, `id_majority`, `id_status`, `id_levels`) VALUES (NULL, '$email', '$password', '$name', '$school', '$phone_number', '$address', NULL, NULL, NULL, '1');");
// Redirect to homepage to display updated user in list
header("Location: ../index.php");
?>