<!-- 
$_GET
An associative array of variables passed to the current script via the URL parameters
 (aka. query string). Note that the array is not only populated for GET requests,
  but rather for all requests with a query string.
 -->

<?php
echo 'Hello ' . htmlspecialchars($_GET["name"]) . '!';
?>

<!-- Assuming the user entered http://example.com/?name=Hannes -->

<!-- the output
Hello Hannes!
-->