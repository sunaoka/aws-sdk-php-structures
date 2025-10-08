<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\DeleteTimelineEvent;

trait DeleteTimelineEventTrait
{
    /**
     * @param DeleteTimelineEventRequest $args
     * @return DeleteTimelineEventResponse
     */
    public function deleteTimelineEvent(DeleteTimelineEventRequest $args)
    {
        $result = parent::deleteTimelineEvent($args->toArray());
        return new DeleteTimelineEventResponse($result->toArray());
    }
}
