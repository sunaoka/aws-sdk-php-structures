<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMeetings\CreateAttendee;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MeetingId
 * @property string $ExternalUserId
 * @property Shapes\AttendeeCapabilities|null $Capabilities
 */
class CreateAttendeeRequest extends Request
{
    /**
     * @param array{
     *     MeetingId: string,
     *     ExternalUserId: string,
     *     Capabilities?: Shapes\AttendeeCapabilities|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
