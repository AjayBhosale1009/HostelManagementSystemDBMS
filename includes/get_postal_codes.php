<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Predefined postal codes for Pune
    $postalCodes = [
        ['area' => 'Katraj', 'code' => '411046'],
        ['area' => 'Kondhwa', 'code' => '411048'],
        ['area' => 'Hadapsar', 'code' => '411013'],
        ['area' => 'Bibwewadi', 'code' => '411037'],
        ['area' => 'Deccan', 'code' => '411004'],
    ];

    $city = strtolower(trim($_POST['city'])); // Retrieve and sanitize city input

    // Check if the city is exactly "pune"
    if ($city === 'pune') {
        foreach ($postalCodes as $entry) {
            echo '<option value="' . $entry['code'] . '">' . $entry['area'] . ' - ' . $entry['code'] . '</option>';
        }
    } else {
        echo '<option value="">Select Postal Code</option>'; // Default option if city is not Pune
    }
}
?>
