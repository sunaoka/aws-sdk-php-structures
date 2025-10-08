<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\DeleteEventBus;

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
