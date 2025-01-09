<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMeetings\GetMeeting\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaxCount
 */
class AttendeeFeatures extends Shape
{
    /**
     * @param array{MaxCount?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
