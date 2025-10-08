<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\DeleteEventStream;

trait DeleteEventStreamTrait
{
    /**
     * @param DeleteEventStreamRequest $args
     * @return DeleteEventStreamResponse
     */
    public function deleteEventStream(DeleteEventStreamRequest $args)
    {
        $result = parent::deleteEventStream($args->toArray());
        return new DeleteEventStreamResponse($result->toArray());
    }
}
