<?php

namespace Bassoumi\BassoumiDataTable;

use Illuminate\Support\ServiceProvider;

class BassoumiDataTableServiceProvider extends ServiceProvider
{
    public function boot()
    {

        $this->loadViewsFrom(__DIR__.'/resources/views', 'bassoumi_data_table');

        $this->publishes([
            __DIR__.'/resources/views' => resource_path('views/vendor/bassoumi_data_table'),
        ]);

        $this->publishes([
            __DIR__.'/config/bassoumi-datatable.php' => config_path('bassoumi-datatable.php'),
        ], 'config');
    }

    public function register()
    {

        $this->mergeConfigFrom(
            __DIR__.'/config/bassoumi-datatable.php', 'bassoumi-datatable'
        );

    }
}
