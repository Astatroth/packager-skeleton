<?php

namespace :uc:vendor\:uc:package;

use Illuminate\Support\ServiceProvider;


class PackageServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', ':lc:package');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', ':lc:package');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        // $this->mergeConfigFrom(__DIR__.'/../config/:lc:package.php', ':lc:package');

        // Register the service the package provides.
        /*$this->app->singleton(Service::class, function ($app) {
            return new Service();
        });*/
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides(): array
    {
        // return [Service::class];
        return [];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        /*$this->publishes([
            __DIR__.'/../config/:lc:package.php' => config_path(':lc:package.php'),
        ], 'package-config');*/

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/:lc:package'),
        ], 'package-views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/:lc:package'),
        ], 'package-assets');*/

        // Publishing components
        /*$this->publishes([
            __DIR__.'/../resources/js/components' => resource_path('vendor/:lc:package'),
        ], 'package-components');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => lang_path('vendor/:lc:package'),
        ], 'package-lang');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
