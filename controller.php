<?php
$path = @parse_url($_SERVER['REQUEST_URI'])['path'];
require "$path";

// switch ($path) {
//     case '/':
//         break;
//     case '/folder1':
//         require 'folder1/'.$path;
//         break;
//     default:
//         http_response_code(404);
//         exit('Not Found');
// }
?>