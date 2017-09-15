<?php

namespace Zym1990\Learning\Providers;

use Illuminate\Support\ServiceProvider;
use Zym1990\Learning\Middleware\LearningTest;

class LearningServiceProvider extends ServiceProvider
{
    protected $routeMiddleware = [
        'learning'=>LearningTest::class,
    ];

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //publish the config file
        $this->publishes([
            __DIR__.'/../config/learning.php'=>config_path('learning.php'),
        ],'learning');

        //load route
        $this->loadRoutesFrom(__DIR__.'/../Routes/learning.php');

        //load view
        $this->loadViewsFrom(__DIR__.'/../views','learning');

        //publish view
        $this->publishes([
            __DIR__.'/../views'=>resource_path('views/vendor/learning'),
        ],'learning');

        $this->publishes([
            __DIR__.'/../resources/learning'=>public_path('learning'),
        ],'learning');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // register route middleware.
        foreach ($this->routeMiddleware as $key => $middleware) {
            app('router')->aliasMiddleware($key, $middleware);
        }
//        $this->app->alias('learning', 'Zym1990\Learning\Learning');
    }
}
