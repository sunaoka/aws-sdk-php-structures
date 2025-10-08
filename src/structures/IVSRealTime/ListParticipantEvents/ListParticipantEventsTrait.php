<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\ListParticipantEvents;

trait ListParticipantEventsTrait
{
    /**
     * @param ListParticipantEventsRequest $args
     * @return ListParticipantEventsResponse
     */
    public function listParticipantEvents(ListParticipantEventsRequest $args)
    {
        $result = parent::listParticipantEvents($args->toArray());
        return new ListParticipantEventsResponse($result->toArray());
    }
}
