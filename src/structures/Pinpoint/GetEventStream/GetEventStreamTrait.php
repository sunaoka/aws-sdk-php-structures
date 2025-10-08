<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetEventStream;

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
