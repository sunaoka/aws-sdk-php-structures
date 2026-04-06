<?php

namespace Sunaoka\Aws\Structures\Connect\StartWebRTCContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Attendee|null $Attendee
 * @property Meeting|null $Meeting
 */
class ConnectionData extends Shape
{
    /**
     * @param array{
     *     Attendee?: Attendee|null,
     *     Meeting?: Meeting|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
