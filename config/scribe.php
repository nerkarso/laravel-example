<?php

// Only the most common configs are shown. See the https://scribe.knuckles.wtf/laravel/reference/config for all.

return [
    'base_url' => 'http://localhost:8000' ?? config("app.url"),

    // See https://scribe.knuckles.wtf/laravel/reference/config#theme for supported options
    'theme' => 'scalar',
];
