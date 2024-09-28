<?php
include 'includes/function.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete contact from the database
    $sql = "DELETE FROM contacts WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $conn->error;
    }
}

include 'views/delete.view.php';
?>