<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Chirp;
use Illuminate\Auth\Access\HandlesAuthorization;

class ChirpPolicy
{
    use HandlesAuthorization;

    public function update(User $user, Chirp $chirp): bool
    {
        return $chirp->user()->is($user);
    }
}
