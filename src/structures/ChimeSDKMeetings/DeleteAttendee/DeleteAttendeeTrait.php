<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMeetings\DeleteAttendee;

trait DeleteAttendeeTrait
{
    /**
     * @param DeleteAttendeeRequest $args
     * @return void
     */
    public function deleteAttendee(DeleteAttendeeRequest $args)
    {
        parent::deleteAttendee($args->toArray());
    }
}
