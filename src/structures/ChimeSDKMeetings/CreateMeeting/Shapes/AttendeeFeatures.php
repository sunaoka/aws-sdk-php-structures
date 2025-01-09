<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMeetings\CreateMeeting\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 250> $MaxCount
 */
class AttendeeFeatures extends Shape
{
    /**
     * @param array{MaxCount?: int<1, 250>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
