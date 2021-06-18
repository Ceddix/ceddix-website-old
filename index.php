<!-- REDIRECT-LINKS -->
<?php
// Custom Links - Reads redirects.json file
$content = file_get_contents("redirects.json");
$redirects = json_decode($content, true);

// ID is set AND redirect is SET
if (isset($_GET["id"]) && isset($redirects[$_GET["id"]])) {
    header("location: " . $redirects[$_GET["id"]]);
}

// (else) FILE "%ID%.php" exists
elseif (@file_exists($_GET['id'] . '.php')) {
    include $_GET['id'] . ".php";
}

// (else) ID IS SET AND NOT EMPTY
elseif (isset($_GET["id"]) && !empty($_GET['id'])) {
    include "errorpages/404.php";
}

// else => Homepage
else {
    include "main.php";
}
?>