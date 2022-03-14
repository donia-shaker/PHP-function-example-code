<!-- 
    $_SESSION

    An associative array containing session variables available to the current script. 
 -->

 <?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
?>

</body>
</html>

<!-- Session variables are set. -->