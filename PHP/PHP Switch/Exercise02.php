<?php
//Add a section that will output "Neither" if $color is neither "red" nor "green".

switch ($color) {
    case "red":
        echo "Hello World";
        break;
    case "green":
        echo "Welcome";
        break;
    default:
    echo "Neither";
}
?>