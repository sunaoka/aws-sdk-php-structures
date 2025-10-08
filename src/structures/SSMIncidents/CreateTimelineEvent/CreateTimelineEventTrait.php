<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\CreateTimelineEvent;

trait CreateTimelineEventTrait
{
    /**
     * @param CreateTimelineEventRequest $args
     * @return CreateTimelineEventResponse
     */
    public function createTimelineEvent(CreateTimelineEventRequest $args)
    {
        $result = parent::createTimelineEvent($args->toArray());
        return new CreateTimelineEventResponse($result->toArray());
    }
}
