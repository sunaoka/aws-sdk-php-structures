<?php

namespace Sunaoka\Aws\Structures\Connect\StartWebRTCContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AttendeeId
 * @property string $JoinToken
 */
class Attendee extends Shape
{
    /**
     * @param array{
     *     AttendeeId?: string,
     *     JoinToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
