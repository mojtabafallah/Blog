<?php
spl_autoload_register(function (string $class_name) {
    if (is_file("src/classes/" . $class_name . ".php"))
        require_once "src/classes/" . $class_name . ".php";
    else
        echo "error";
});


