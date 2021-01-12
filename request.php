<?php

header('Content-Type: application/json');
function output($message) {
    echo json_encode([
        "message" => $message,
        "status" => "success"
    ]);
}

if (isset($_POST['username'])) {
    if (empty($_POST['username'])) {
        output("user is set");
    }
    else {
        output("user is not empty");
    }
}
else {
    output("user is not set");
}