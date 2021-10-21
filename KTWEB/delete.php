<?php 
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    header("Location: index.php");
}
include "admin/config.php";

$query = "delete from drugs where id = ?";
$stmt = $conn->prepare($query);     
if(!$conn->error) {
    $stmt->bind_param("d", $id);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    header("Location: index.php");
} else {
    echo "Lỗi: ".$conn->error;
    $conn->close();
}   
?>