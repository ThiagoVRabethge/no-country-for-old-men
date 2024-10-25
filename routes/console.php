<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Artisan::command('dev', function () {
    $this->call('config:clear');
    $this->call('cache:clear');
    $this->call('serve');
})->purpose('Limpar configurações e cache antes de iniciar')->hourly();
