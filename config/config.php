<?php
session_start();

require_once(__DIR__ . '/../functions/activity.php');
require_once(__DIR__ . '/../functions/auth.php');
require_once(__DIR__ . '/../functions/redirect.php');
require_once(__DIR__ . '/../functions/sessions.php');

define('BASE_URL', 'http://localhost/it34a');
//http://localhost/IT34A/includes/test-logger.php
define('DB_HOST', 'localhost');
<<<<<<< HEAD
define('DB_NAME', 'it3a_lab_db');
=======
define('DB_NAME', 'it34atoribio_lab_db');
>>>>>>> dfcf417c405ea763c29b9b2277f1317552183354
define('DB_USER', 'root');
define('DB_PASS', '');

try {
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME,
        DB_USER,
        DB_PASS,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

   

} catch (PDOException $e) {
    die("Connection Failed: " . $e->getMessage());
}
?>