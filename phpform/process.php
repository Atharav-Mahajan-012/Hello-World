<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    echo "<h2>You Entered: $name</h2>";
    $file = fopen("data.txt", "a");
    fwrite($file, $name . "\n");
    fclose($file);
}
?>
