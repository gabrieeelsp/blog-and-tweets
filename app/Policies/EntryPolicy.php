<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Entry;

class EntryPolicy
{
    use HandlesAuthorization;

    public function update(User $user, Entry $entry)
    {
        return $user->id === $entry->user_id;
    }
}
