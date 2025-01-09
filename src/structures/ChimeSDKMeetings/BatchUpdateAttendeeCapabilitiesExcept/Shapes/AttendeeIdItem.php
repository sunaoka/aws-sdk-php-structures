<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMeetings\BatchUpdateAttendeeCapabilitiesExcept\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AttendeeId
 */
class AttendeeIdItem extends Shape
{
    /**
     * @param array{AttendeeId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
