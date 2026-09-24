<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\DeleteEventBus;

trait DeleteEventBusTrait
{
    /**
     * @param DeleteEventBusRequest $args
     * @return DeleteEventBusResponse
     */
    public function deleteEventBus(DeleteEventBusRequest $args)
    {
        $result = parent::deleteEventBus($args->toArray());
        return new DeleteEventBusResponse($result->toArray());
    }
}
