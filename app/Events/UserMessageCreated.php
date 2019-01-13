<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\UserMessage;

class UserMessageCreated implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Object
     */ 
    public $userMessage;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(UserMessage $userMessage)
    {
        //
        $this->userMessage = $userMessage;

        //
        logger('message - '. $userMessage->id.' event triggered', []);    
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('user-message-created');
        //return new Channel('user-message-created');
        //return new PrivateChannel('user-message-created.'.$this->userMessage->id);
    }

    /**
     * The event's broadcast name.
     *
     * @return string
     */
    /*public function broadcastAs()
    {
        return 'message.created';
    }*/
}
