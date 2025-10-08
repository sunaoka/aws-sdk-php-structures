<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\UpdateTimelineEvent;

trait UpdateTimelineEventTrait
{
    /**
     * @param UpdateTimelineEventRequest $args
     * @return UpdateTimelineEventResponse
     */
    public function updateTimelineEvent(UpdateTimelineEventRequest $args)
    {
        $result = parent::updateTimelineEvent($args->toArray());
        return new UpdateTimelineEventResponse($result->toArray());
    }
}
