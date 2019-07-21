<?php

$manifest = [
    'short_name' => "Max's Game",
    'name' => "Max's Name Game",
    "icons"=> [
        [
            "src"=> "assets/images/max-192.png",
            "type"=> "image/png",
            "sizes"=> "192x192"
        ],
    ],
    "start_url"=> "index.html",
    "background_color"=> "#fff",
    "display"=> "standalone",
    "scope"=> "/",
];
file_put_contents('manifest.json',json_encode($manifest));
