<?php

namespace Sunaoka\Aws\Structures\Chime\BatchCreateAttendee\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ExternalUserId
 * @property string $AttendeeId
 * @property string $JoinToken
 */
class Attendee extends Shape
{
    /**
     * @param array{
     *     ExternalUserId?: string,
     *     AttendeeId?: string,
     *     JoinToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
