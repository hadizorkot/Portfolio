<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = json_decode(file_get_contents("users.json"), true);

    $loginUsername = $_POST["loginUsername"];
    $loginPassword = $_POST["loginPassword"];

    $user = null;
    foreach ($data as $u) {
        if ($u["username"] === $loginUsername && $u["password"] === $loginPassword) {
            $user = $u;
            break;
        }
    }

    if ($user) {
        $_SESSION["user"] = $user;
        header("Location: main.php");
        exit;
    } else {
        echo json_encode(["error" => "Invalid username or password"]);
    }
}
?>
