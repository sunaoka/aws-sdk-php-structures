<?php

namespace Sunaoka\Aws\Structures\Chime\UntagMeeting;

trait UntagMeetingTrait
{
    /**
     * @param UntagMeetingRequest $args
     * @return void
     */
    public function untagMeeting(UntagMeetingRequest $args)
    {
        parent::untagMeeting($args->toArray());
    }
}
