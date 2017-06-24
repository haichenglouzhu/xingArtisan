<?php

namespace XingArtisan\Src;

use Illuminate\Support\ServiceProvider;

class ServeProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/myselfRoute.php');
        $this->publishes([
            __DIR__ . '/config/testConfig.php' => config_path('testConfig.php'),
        ]);
        $this->loadMigrationsFrom(__DIR__ . '/migrates/');
        $this->loadViewsFrom(__DIR__ . '/view', 'xingArt');
        if ($this->app->runningInConsole()) {
            $this->commands([
                TestCommand::class
            ]);
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('artisanTest', function(){
           return new ArtisanTest();
        });
        $this->mergeConfigFrom(
            __DIR__ . '/config/testConfig.php', 'testConfig'
        );

    }
}
