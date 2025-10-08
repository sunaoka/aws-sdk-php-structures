<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMeetings\GetMeeting;

trait GetMeetingTrait
{
    /**
     * @param GetMeetingRequest $args
     * @return GetMeetingResponse
     */
    public function getMeeting(GetMeetingRequest $args)
    {
        $result = parent::getMeeting($args->toArray());
        return new GetMeetingResponse($result->toArray());
    }
}
