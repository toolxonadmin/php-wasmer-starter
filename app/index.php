<?php
header('Content-Type: application/json; charset=utf-8');

echo json_encode([
    'success' => true,
    'service' => 'ToolXON Web Tool Manager API',
    'version' => '1.0',
    'php_version' => PHP_VERSION
], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);