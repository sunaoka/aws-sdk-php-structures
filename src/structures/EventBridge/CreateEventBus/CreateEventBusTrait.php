<?php

namespace Sunaoka\Aws\Structures\EventBridge\CreateEventBus;

trait CreateEventBusTrait
{
    /**
     * @param CreateEventBusRequest $args
     * @return CreateEventBusResponse
     */
    public function createEventBus(CreateEventBusRequest $args)
    {
        $result = parent::createEventBus($args->toArray());
        return new CreateEventBusResponse($result->toArray());
    }
}
