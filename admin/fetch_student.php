<?php
include('../includes/dbconn.php');

if (isset($_POST['regno'])) {
    $regno = $_POST['regno'];

    $query = "SELECT firstName, middleName, lastName, gender, contactNo, email FROM userRegistration WHERE regNo = ?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param('s', $regno);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo json_encode([
            "status" => "success",
            "data" => $row
        ]);
    } else {
        echo json_encode([
            "status" => "error",
            "message" => "No student found."
        ]);
    }
}
?>
