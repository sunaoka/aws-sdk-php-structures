<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetEventStream;

trait GetEventStreamTrait
{
    /**
     * @param GetEventStreamRequest $args
     * @return GetEventStreamResponse
     */
    public function getEventStream(GetEventStreamRequest $args)
    {
        $result = parent::getEventStream($args->toArray());
        return new GetEventStreamResponse($result->toArray());
    }
}
