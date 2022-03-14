<!-- $GLOBALS:An associative array containing references to all variables which are currently
 defined in the global scope of the script. The variable names are the keys of the array. -->

 <?php
function test() {
    $foo = "local variable";

    echo '$foo in global scope: ' . $GLOBALS["foo"] . "\n";
    echo '$foo in current scope: ' . $foo . "\n";
}

$foo = "Example content";
test();
?>

<!-- OUTPUT:
$foo in global scope: Example content
$foo in current scope: local variable
 -->