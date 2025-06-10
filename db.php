<?php
// Ensure no output before this
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

$serverNaame = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "dbsaidu";

$conn = mysqli_connect($serverNaame, $dbUser, $dbPass, $dbName);

if (!$conn) {
    http_response_code(500);
    echo json_encode(["error" => "Database connection failed"]);
    exit();
}

$sql = "SELECT * FROM product;";
$result = mysqli_query($conn, $sql);

$json_array = [];

while ($row = mysqli_fetch_assoc($result)) {
    $json_array[] = $row;
}

header("Content-Type: application/json");
echo json_encode($json_array);
