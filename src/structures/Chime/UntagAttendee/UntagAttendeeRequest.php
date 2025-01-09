<?php

namespace Sunaoka\Aws\Structures\Chime\UntagAttendee;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MeetingId
 * @property string $AttendeeId
 * @property list<string> $TagKeys
 */
class UntagAttendeeRequest extends Request
{
    /**
     * @param array{
     *     MeetingId: string,
     *     AttendeeId: string,
     *     TagKeys: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
