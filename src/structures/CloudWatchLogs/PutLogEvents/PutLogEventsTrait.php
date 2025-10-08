<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutLogEvents;

trait PutLogEventsTrait
{
    /**
     * @param PutLogEventsRequest $args
     * @return PutLogEventsResponse
     */
    public function putLogEvents(PutLogEventsRequest $args)
    {
        $result = parent::putLogEvents($args->toArray());
        return new PutLogEventsResponse($result->toArray());
    }
}
