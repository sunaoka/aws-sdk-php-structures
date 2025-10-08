<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\CreateEventBus;

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
