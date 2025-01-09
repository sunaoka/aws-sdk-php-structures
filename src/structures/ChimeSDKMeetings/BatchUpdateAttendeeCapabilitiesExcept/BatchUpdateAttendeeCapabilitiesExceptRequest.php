<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMeetings\BatchUpdateAttendeeCapabilitiesExcept;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MeetingId
 * @property list<Shapes\AttendeeIdItem> $ExcludedAttendeeIds
 * @property Shapes\AttendeeCapabilities $Capabilities
 */
class BatchUpdateAttendeeCapabilitiesExceptRequest extends Request
{
    /**
     * @param array{
     *     MeetingId: string,
     *     ExcludedAttendeeIds: list<Shapes\AttendeeIdItem>,
     *     Capabilities: Shapes\AttendeeCapabilities
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
