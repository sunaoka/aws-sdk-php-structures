<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\PutRawEvents;

trait PutRawEventsTrait
{
    /**
     * @param PutRawEventsRequest $args
     * @return PutRawEventsResponse
     */
    public function putRawEvents(PutRawEventsRequest $args)
    {
        $result = parent::putRawEvents($args->toArray());
        return new PutRawEventsResponse($result->toArray());
    }
}
