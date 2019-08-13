<?php

namespace Bassoumi\BassoumiDataTable;

use Illuminate\Support\ServiceProvider;

class BassoumiDataTableServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'bassoumi_data_table');

        $this->publishes([
            __DIR__.'/resources/views' => base_path('resources/views/vendor/bassoumi'),
        ]);

        $this->publishes([
            __DIR__.'/config/bassoumi-datatable.php' => config_path('bassoumi-datatable.php'),
        ], 'config');
    }

    public function register()
    {


    }
}
