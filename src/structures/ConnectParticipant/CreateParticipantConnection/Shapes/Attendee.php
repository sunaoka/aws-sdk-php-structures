<?php

namespace Sunaoka\Aws\Structures\ConnectParticipant\CreateParticipantConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AttendeeId
 * @property string|null $JoinToken
 */
class Attendee extends Shape
{
    /**
     * @param array{
     *     AttendeeId?: string|null,
     *     JoinToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
