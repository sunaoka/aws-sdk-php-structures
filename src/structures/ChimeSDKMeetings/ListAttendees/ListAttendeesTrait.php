<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMeetings\ListAttendees;

trait ListAttendeesTrait
{
    /**
     * @param ListAttendeesRequest $args
     * @return ListAttendeesResponse
     */
    public function listAttendees(ListAttendeesRequest $args)
    {
        $result = parent::listAttendees($args->toArray());
        return new ListAttendeesResponse($result->toArray());
    }
}
