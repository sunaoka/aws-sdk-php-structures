<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMeetings\CreateMeeting;

trait CreateMeetingTrait
{
    /**
     * @param CreateMeetingRequest $args
     * @return CreateMeetingResponse
     */
    public function createMeeting(CreateMeetingRequest $args)
    {
        $result = parent::createMeeting($args->toArray());
        return new CreateMeetingResponse($result->toArray());
    }
}
