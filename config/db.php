<?php
$conn = new mysqli(
    getenv("DB_HOST") ?: "localhost",
    getenv("DB_USER") ?: "root",
    getenv("DB_PASSWORD") ?: "",
    getenv("DB_NAME") ?: "db_edm",
    (int)(getenv("MYSQLPORT") ?: 3306)
);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>