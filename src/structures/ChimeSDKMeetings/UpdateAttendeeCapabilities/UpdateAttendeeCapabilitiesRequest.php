<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMeetings\UpdateAttendeeCapabilities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MeetingId
 * @property string $AttendeeId
 * @property Shapes\AttendeeCapabilities $Capabilities
 */
class UpdateAttendeeCapabilitiesRequest extends Request
{
    /**
     * @param array{
     *     MeetingId: string,
     *     AttendeeId: string,
     *     Capabilities: Shapes\AttendeeCapabilities
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
