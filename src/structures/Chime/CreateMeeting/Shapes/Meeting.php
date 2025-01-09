<?php

namespace Sunaoka\Aws\Structures\Chime\CreateMeeting\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MeetingId
 * @property string $ExternalMeetingId
 * @property MediaPlacement $MediaPlacement
 * @property string $MediaRegion
 */
class Meeting extends Shape
{
    /**
     * @param array{
     *     MeetingId?: string,
     *     ExternalMeetingId?: string,
     *     MediaPlacement?: MediaPlacement,
     *     MediaRegion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
