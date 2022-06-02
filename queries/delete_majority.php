
<?php
// include database connection file
include_once("../databases/connection.php");

// Check if form is submitted for user update, then redirect to homepage after update
$id = $_GET['id'];
$to = $_GET['to'];
if (!isset($to)) {
    $to = 'admin/majority_list_page.php';
}
// delete majority
$result = mysqli_query($connection, "DELETE FROM majorities WHERE id_majority='$id'");

// Redirect to homepage to display updated user in list
header("Location: ../pages/$to");
?>