<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateEventStream;

trait CreateEventStreamTrait
{
    /**
     * @param CreateEventStreamRequest $args
     * @return CreateEventStreamResponse
     */
    public function createEventStream(CreateEventStreamRequest $args)
    {
        $result = parent::createEventStream($args->toArray());
        return new CreateEventStreamResponse($result->toArray());
    }
}
