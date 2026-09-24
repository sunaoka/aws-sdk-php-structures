<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\CreateEventSource;

trait CreateEventSourceTrait
{
    /**
     * @param CreateEventSourceRequest $args
     * @return CreateEventSourceResponse
     */
    public function createEventSource(CreateEventSourceRequest $args)
    {
        $result = parent::createEventSource($args->toArray());
        return new CreateEventSourceResponse($result->toArray());
    }
}
