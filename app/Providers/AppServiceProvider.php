<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
<<<<<<< Updated upstream
<<<<<<< Updated upstream
        View::composer('*', function($view){
            $view->share('website_name', 'My website');
=======
        View::composer('*', function ($view) {
            $view->with('website', 'sbc');
>>>>>>> Stashed changes
=======
        View::composer('*', function ($view) {
            $view->with('website', 'sbc');
>>>>>>> Stashed changes
        });
    }
}
