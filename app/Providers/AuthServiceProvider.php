<?php

namespace App\Providers;

use App\Auth\Provider\CachedEloquentUserProvider;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        auth()->provider('cachedEloquent', function ($application, array $config) {
            return new CachedEloquentUserProvider(
                $application['hash'],
                $config['model'],
            );
        });
    }
}
