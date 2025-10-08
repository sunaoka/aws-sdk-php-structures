<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMeetings\CreateMeetingWithAttendees;

trait CreateMeetingWithAttendeesTrait
{
    /**
     * @param CreateMeetingWithAttendeesRequest $args
     * @return CreateMeetingWithAttendeesResponse
     */
    public function createMeetingWithAttendees(CreateMeetingWithAttendeesRequest $args)
    {
        $result = parent::createMeetingWithAttendees($args->toArray());
        return new CreateMeetingWithAttendeesResponse($result->toArray());
    }
}
