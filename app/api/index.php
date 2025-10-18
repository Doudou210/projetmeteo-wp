<?php
// On se place dans la racine "app/" pour que tes includes relatifs fonctionnent
chdir(dirname(__DIR__)); // passe de app/api -> app

// (Facultatif) Autoload si tu utilises Composer
$autoload = __DIR__ . '/../vendor/autoload.php';
if (file_exists($autoload)) {
    require $autoload;
}

// Lance ton index existant
require __DIR__ . '/../index.php';