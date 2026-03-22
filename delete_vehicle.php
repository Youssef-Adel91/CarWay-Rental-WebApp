<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'userinfo');

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Check if vehicle_id is provided via POST
if (isset($_POST['vehicle_id']) && !empty($_POST['vehicle_id'])) {
    $vehicle_id = intval($_POST['vehicle_id']);

    try {
        // Prepare the SQL query to delete the vehicle
        $stmt = $conn->prepare("DELETE FROM Vehicle WHERE Vehicle_id = ?");
        $stmt->bind_param("i", $vehicle_id);

        // Execute the query
        if ($stmt->execute()) {
            echo "Vehicle deleted successfully!";
        } else {
            echo "Error deleting vehicle: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Error: Vehicle ID not provided.";
}

// Close the database connection
$conn->close();
?>