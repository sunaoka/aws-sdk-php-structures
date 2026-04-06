<?php

namespace Sunaoka\Aws\Structures\Chime\TagMeeting;

trait TagMeetingTrait
{
    /**
     * @param TagMeetingRequest $args
     * @return void
     */
    public function tagMeeting(TagMeetingRequest $args)
    {
        parent::tagMeeting($args->toArray());
    }
}
