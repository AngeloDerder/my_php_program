<?php
echo "Hello, World!";
?><?php
echo "Hello, World!";
?>

<?php
function greet() {
    echo "Hello, from the greet function!";
}

greet();
?>

<?php
function greet() {
    echo "Hello, from the greet function!";
}

function say_goodbye() {
    echo "Goodbye!";
}

greet();
say_goodbye();
?>