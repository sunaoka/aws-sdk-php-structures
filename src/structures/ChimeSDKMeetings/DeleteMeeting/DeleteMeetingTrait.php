<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMeetings\DeleteMeeting;

trait DeleteMeetingTrait
{
    /**
     * @param DeleteMeetingRequest $args
     * @return void
     */
    public function deleteMeeting(DeleteMeetingRequest $args)
    {
        parent::deleteMeeting($args->toArray());
    }
}
