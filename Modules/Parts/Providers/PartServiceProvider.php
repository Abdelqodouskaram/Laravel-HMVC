<?php

namespace Modules\Parts\Providers;

use Illuminate\Support\ServiceProvider;

class PartServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . "/../Routes/routes.php");
        $this->loadMigrationsFrom(__DIR__ . "/../Migrations");
    }
}