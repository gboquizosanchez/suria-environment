<?php

namespace Suria\Environment;

use Illuminate\Support\ServiceProvider;

class EnvironmentServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
		\Artisan::call('vendor:publish', ['--force' => true]);
    }

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