<?php

namespace Suria\Environment;

use Illuminate\Support\ServiceProvider;

class EnvironmentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([__DIR__.'/../bootstrap' => base_path('bootstrap')], 'environment');
        }
    }
}
