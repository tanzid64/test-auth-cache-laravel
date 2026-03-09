<?php

namespace App\Observers;

class UserObserver
{
    public function updated($user)
    {
        cache()->forget('auth_user_' . $user->id);
    }

    public function deleted($user)
    {
        cache()->forget('auth_user_' . $user->id);
    }
}
