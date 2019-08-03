<?php

namespace MyVendor\BassoumiDataTable;

use Illuminate\Support\ServiceProvider;

class BassoumiDataTableServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'bassoumi_data_table');
    }

    public function register()
    {

    }
}
