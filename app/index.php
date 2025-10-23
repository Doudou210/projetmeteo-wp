<?php
    require_once __DIR__ . "/components/navbar/header.php";

    $page = $_GET["page"] ?? "home";
    $file = __DIR__ . "/pages/" . basename($page) . ".php";

    //Pour afficher les pages si elle existe
    if (is_file($file)) {
        require $file;
    } else {
        http_response_code(404);
        echo "<h2>Page non trouver</h2>";
    }

    require_once  __DIR__ . "/components/navbar/footer.php";