<?php

namespace Sunaoka\Aws\Structures\Chime\BatchCreateAttendee\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ExternalUserId
 * @property string|null $AttendeeId
 * @property string|null $JoinToken
 */
class Attendee extends Shape
{
    /**
     * @param array{
     *     ExternalUserId?: string|null,
     *     AttendeeId?: string|null,
     *     JoinToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
