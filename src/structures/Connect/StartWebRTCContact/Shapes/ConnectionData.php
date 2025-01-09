<?php

namespace Sunaoka\Aws\Structures\Connect\StartWebRTCContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Attendee $Attendee
 * @property Meeting $Meeting
 */
class ConnectionData extends Shape
{
    /**
     * @param array{
     *     Attendee?: Attendee,
     *     Meeting?: Meeting
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
