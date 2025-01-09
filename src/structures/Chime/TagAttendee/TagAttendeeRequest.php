<?php

namespace Sunaoka\Aws\Structures\Chime\TagAttendee;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MeetingId
 * @property string $AttendeeId
 * @property list<Shapes\Tag> $Tags
 */
class TagAttendeeRequest extends Request
{
    /**
     * @param array{
     *     MeetingId: string,
     *     AttendeeId: string,
     *     Tags: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
