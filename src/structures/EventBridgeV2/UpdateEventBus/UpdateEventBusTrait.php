<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\UpdateEventBus;

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
