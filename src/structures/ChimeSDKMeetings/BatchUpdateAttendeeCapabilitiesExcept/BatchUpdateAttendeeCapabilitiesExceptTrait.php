<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMeetings\BatchUpdateAttendeeCapabilitiesExcept;

trait BatchUpdateAttendeeCapabilitiesExceptTrait
{
    /**
     * @param BatchUpdateAttendeeCapabilitiesExceptRequest $args
     * @return void
     */
    public function batchUpdateAttendeeCapabilitiesExcept(BatchUpdateAttendeeCapabilitiesExceptRequest $args)
    {
        parent::batchUpdateAttendeeCapabilitiesExcept($args->toArray());
    }
}
