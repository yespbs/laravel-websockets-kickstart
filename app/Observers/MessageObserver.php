<?php

namespace App\Observers;
use App\Message;
use App\Events\MessageCreated;

class MessageObserver
{
    //
    /**
     * Listen to the Model created event.
     *
     * @param  App\Message $message
     * @return void
     */
    public function created(Message $message)
    {
        //
        logger('message - '. $message->id.' created', []);        

        event(new MessageCreated($message) );
    }
}
