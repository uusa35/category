<?php

namespace Usama\Category;

use Illuminate\Support\ServiceProvider;

class CategoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__ . '/routes.php';
        // you load the views from the main project
        $this->loadViewsFrom(base_path('resources/views/frontend/modules', 'category'));
        $this->loadViewsFrom(base_path('resources/views/backend/modules', 'category'));
        // you publish the views in the project itself
        $this->publishes([
            __DIR__ . '/views/frontend' => base_path('resources/views/frontend/modules'),
            __DIR__ . '/views/backend' => base_path('resources/views/backend/modules'),
        ]);
        // you publish the migrations
        $this->publishes([
            __DIR__ . '/migrations' => database_path('migrations')
        ], 'migrations');


    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app['category'] = $this->app->singleton(function ($app) {
            return new Category;
        });
    }
}
