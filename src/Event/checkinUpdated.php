<?php

namespace wusong8899\checkin\Event;

use Flarum\User\User;

class checkinUpdated
{
    public $user;

    public function __construct(User $user = null)
    {
        $this->user = $user;
    }
}
