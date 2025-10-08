<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMeetings\UpdateAttendeeCapabilities;

trait UpdateAttendeeCapabilitiesTrait
{
    /**
     * @param UpdateAttendeeCapabilitiesRequest $args
     * @return UpdateAttendeeCapabilitiesResponse
     */
    public function updateAttendeeCapabilities(UpdateAttendeeCapabilitiesRequest $args)
    {
        $result = parent::updateAttendeeCapabilities($args->toArray());
        return new UpdateAttendeeCapabilitiesResponse($result->toArray());
    }
}
