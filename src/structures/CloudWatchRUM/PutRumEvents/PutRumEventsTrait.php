<?php

namespace Sunaoka\Aws\Structures\CloudWatchRUM\PutRumEvents;

trait PutRumEventsTrait
{
    /**
     * @param PutRumEventsRequest $args
     * @return PutRumEventsResponse
     */
    public function putRumEvents(PutRumEventsRequest $args)
    {
        $result = parent::putRumEvents($args->toArray());
        return new PutRumEventsResponse($result->toArray());
    }
}
