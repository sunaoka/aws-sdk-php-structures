<?php

namespace Sunaoka\Aws\Structures\EventBridge\UpdateEventBus;

trait UpdateEventBusTrait
{
    /**
     * @param UpdateEventBusRequest $args
     * @return UpdateEventBusResponse
     */
    public function updateEventBus(UpdateEventBusRequest $args)
    {
        $result = parent::updateEventBus($args->toArray());
        return new UpdateEventBusResponse($result->toArray());
    }
}
