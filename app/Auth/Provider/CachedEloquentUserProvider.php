<?php

namespace App\Auth\Provider;

use Illuminate\Auth\EloquentUserProvider;

class CachedEloquentUserProvider extends EloquentUserProvider
{
    public function retrieveById($identifier)
    {
        return cache()->remember('auth_user_' . $identifier, now()->addDay(), function () use ($identifier) {
            return parent::retrieveById($identifier);
        });
    }
}
