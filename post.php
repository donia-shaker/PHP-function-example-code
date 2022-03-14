<!-- 
$_POST
An associative array of variables passed to the current script via the HTTP POST method 
when using application/x-www-form-urlencoded or multipart/form-data as the HTTP Content-Type
 in the request. 
-->

<?php
echo 'Hello ' . htmlspecialchars($_POST["name"]) . '!';
?>

<!-- Assuming the user POSTed name=Hannes -->
<!-- 
    
output

Hello Hannes! -->
