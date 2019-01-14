<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\UserMessage;
use App\Observers\UserMessageObserver;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        //URL::forceScheme( env('HTTP_SCHEME', 'http') );

        UserMessage::observe(UserMessageObserver::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
