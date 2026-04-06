<?php

namespace Sunaoka\Aws\Structures\Chime\CreateMeetingWithAttendees\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MeetingId
 * @property string|null $ExternalMeetingId
 * @property MediaPlacement|null $MediaPlacement
 * @property string|null $MediaRegion
 */
class Meeting extends Shape
{
    /**
     * @param array{
     *     MeetingId?: string|null,
     *     ExternalMeetingId?: string|null,
     *     MediaPlacement?: MediaPlacement|null,
     *     MediaRegion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
