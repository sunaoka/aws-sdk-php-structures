<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMeetings\CreateAttendee\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ExternalUserId
 * @property string $AttendeeId
 * @property string $JoinToken
 * @property AttendeeCapabilities $Capabilities
 */
class Attendee extends Shape
{
    /**
     * @param array{
     *     ExternalUserId?: string,
     *     AttendeeId?: string,
     *     JoinToken?: string,
     *     Capabilities?: AttendeeCapabilities
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
