<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\GetTimelineEvent;

trait GetTimelineEventTrait
{
    /**
     * @param GetTimelineEventRequest $args
     * @return GetTimelineEventResponse
     */
    public function getTimelineEvent(GetTimelineEventRequest $args)
    {
        $result = parent::getTimelineEvent($args->toArray());
        return new GetTimelineEventResponse($result->toArray());
    }
}
