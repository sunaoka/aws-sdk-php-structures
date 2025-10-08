<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\ListTimelineEvents;

trait ListTimelineEventsTrait
{
    /**
     * @param ListTimelineEventsRequest $args
     * @return ListTimelineEventsResponse
     */
    public function listTimelineEvents(ListTimelineEventsRequest $args)
    {
        $result = parent::listTimelineEvents($args->toArray());
        return new ListTimelineEventsResponse($result->toArray());
    }
}
