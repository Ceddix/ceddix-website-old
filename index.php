<!-- REDIRECT-LINKS -->
<?php
// Custom Links - Reads redirects.json file
$content = file_get_contents("redirects.json");
$redirects = json_decode($content, true);

// Checks if ID exists in custom links
if (isset($redirects[$_GET["id"]])) {
    header("location: " . $redirects[$_GET["id"]]);
}
// Checks there is an file named like ID
elseif (@file_exists($_GET['id'] . '.php')) {
    include $_GET['id'] . ".php";
}
// Checks if a empty ID is set => 404
elseif (isset($_GET["id"]) && !empty($_GET["id"])) {
    include "errorpages/404.php";
}
// Checks if a ID is set, but there isn't any custom link or file => 404
elseif (!empty($_GET["id"])) {
    include "errorpages/404.php";
}
// Else => Homepage
else {
    include "main.php";
}
?>