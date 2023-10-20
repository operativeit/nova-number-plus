<?php

namespace Eom\NovaNumberPlus;

use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Nova;

class FieldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            // Publish config
            $this->publishes([
                __DIR__.'/../config/' => config_path(),
            ], 'config');
        }

        Nova::serving(function (ServingNova $event) {
            Nova::script('nova-number-plus', __DIR__.'/../dist/js/field.js');
            Nova::style('nova-number-plus', __DIR__.'/../dist/css/field.css');
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/nova-number-plus.php',
            'nova-number-plus'
        );
    }
}
