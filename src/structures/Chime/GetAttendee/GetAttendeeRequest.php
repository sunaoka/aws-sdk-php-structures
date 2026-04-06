<?php

namespace Sunaoka\Aws\Structures\Chime\GetAttendee;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MeetingId
 * @property string $AttendeeId
 */
class GetAttendeeRequest extends Request
{
    /**
     * @param array{
     *     MeetingId: string,
     *     AttendeeId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
