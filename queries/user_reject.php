
<?php
// include database connection file
include_once("../databases/connection.php");

// Check if form is submitted for user update, then redirect to homepage after update
$id = $_GET['id'];
$to = $_GET['to'];
if (!isset($to)) {
    $to = 'admin/verify_list_page.php';
}
// update user data
$result = mysqli_query($connection, "UPDATE pengguna SET id_status = 3 WHERE id=$id");

// Redirect to homepage to display updated user in list
header("Location: ../pages/$to");
?>