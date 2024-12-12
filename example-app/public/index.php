<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Vẽ con mèo bằng ký tự ASCII và thay thế xuống dòng bằng <br> để hiển thị đúng trên web
$cat = "
 /\_/\  <br>
( o.o ) <br>
 > ^ <  <br>
";

// In ra con mèo với thẻ <br> thay vì ký tự xuống dòng
echo $cat;

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
(require_once __DIR__.'/../bootstrap/app.php')
    ->handleRequest(Request::capture());

