<?php

require_once(__DIR__ . '/includes/global-variables.php');
require_once(__DIR__ . '/includes/func-routing.php');

try {
    require_once(__DIR__ . '/routes.php');
} catch (Throwable $e) {
    http_response_code($e->code);
    echo 'here';
    throw $e;
}