<?php

namespace Sunaoka\Aws\Structures\EventBridge\DeleteEventBus;

trait DeleteEventBusTrait
{
    /**
     * @param DeleteEventBusRequest $args
     * @return void
     */
    public function deleteEventBus(DeleteEventBusRequest $args)
    {
        parent::deleteEventBus($args->toArray());
    }
}
