<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\FilterLogEvents;

trait FilterLogEventsTrait
{
    /**
     * @param FilterLogEventsRequest $args
     * @return FilterLogEventsResponse
     */
    public function filterLogEvents(FilterLogEventsRequest $args)
    {
        $result = parent::filterLogEvents($args->toArray());
        return new FilterLogEventsResponse($result->toArray());
    }
}
