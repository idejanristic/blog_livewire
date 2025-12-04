<?php

$isLocal = env('APP_ENV') === 'local';

$providers = [
    App\Providers\AppServiceProvider::class,
    App\Providers\FortifyServiceProvider::class,
];

if ($isLocal) {
    $providers[] = Barryvdh\Debugbar\ServiceProvider::class;
}

return $providers;
