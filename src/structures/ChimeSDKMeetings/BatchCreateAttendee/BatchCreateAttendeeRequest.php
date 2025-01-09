<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMeetings\BatchCreateAttendee;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MeetingId
 * @property list<Shapes\CreateAttendeeRequestItem> $Attendees
 */
class BatchCreateAttendeeRequest extends Request
{
    /**
     * @param array{
     *     MeetingId: string,
     *     Attendees: list<Shapes\CreateAttendeeRequestItem>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
