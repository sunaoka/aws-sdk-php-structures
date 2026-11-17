<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory\CreateEvent;

trait CreateEventTrait
{
    /**
     * @param CreateEventRequest $args
     * @return CreateEventResponse
     */
    public function createEvent(CreateEventRequest $args)
    {
        $result = parent::createEvent($args->toArray());
        return new CreateEventResponse($result->toArray());
    }
}
