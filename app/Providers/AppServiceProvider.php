
<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Use HTTPS in production
        if (env('APP_ENV') !== 'local') {
            URL::forceScheme('https');
        }
        
        // Use Bootstrap for pagination
        Paginator::useBootstrap();
    }
}
