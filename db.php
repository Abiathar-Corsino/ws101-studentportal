<?php

$jsonFilePath = 'users.json';


if (!file_exists($jsonFilePath)) {
    die("JSON file not found.");
}

try {

    $jsonData = file_get_contents($jsonFilePath);
 
    $data = json_decode($jsonData, true);
    
    if ($data === null) {
        throw new Exception("Failed to decode JSON data.");
    }


    echo "JSON data successfully loaded.";
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}
?>
