<?php

namespace Sunaoka\Aws\Structures\Inspector\SubscribeToEvent;

trait SubscribeToEventTrait
{
    /**
     * @param SubscribeToEventRequest $args
     * @return void
     */
    public function subscribeToEvent(SubscribeToEventRequest $args)
    {
        parent::subscribeToEvent($args->toArray());
    }
}
