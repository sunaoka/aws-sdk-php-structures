<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetLogEvents;

trait GetLogEventsTrait
{
    /**
     * @param GetLogEventsRequest $args
     * @return GetLogEventsResponse
     */
    public function getLogEvents(GetLogEventsRequest $args)
    {
        $result = parent::getLogEvents($args->toArray());
        return new GetLogEventsResponse($result->toArray());
    }
}
