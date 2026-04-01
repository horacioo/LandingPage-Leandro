<?php

// 1. Se já escolheu idioma
if (isset($_COOKIE['lang'])) {
    $lang = $_COOKIE['lang'];
} else {

    // 2. Detecta idioma do navegador
    $browserLang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

    if ($browserLang === 'pt') {
        $lang = 'pt';
    } else {
        $lang = 'en';
    }
}

// 3. Redireciona
if ($lang === 'pt') {
    header("Location: pt.php");
} else {
    header("Location: en.php");
}

exit;