<?php

namespace App\Observers;
use App\UserMessage;
use App\Events\UserMessageCreated;

class UserMessageObserver
{
    //
    /**
     * Listen to the Model created event.
     *
     * @param  Rtweek\Models\ClosedGroup $closedGroup
     * @return void
     */
    public function created(UserMessage $userMessage)
    {
        //
        logger('message - '. $userMessage->id.' created', []);        

        event(new UserMessageCreated($userMessage) );
    }
}
