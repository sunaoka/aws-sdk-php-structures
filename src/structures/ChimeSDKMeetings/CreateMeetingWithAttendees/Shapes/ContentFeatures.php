<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMeetings\CreateMeetingWithAttendees\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'None'|'FHD'|'UHD'|null $MaxResolution
 */
class ContentFeatures extends Shape
{
    /**
     * @param array{MaxResolution?: 'None'|'FHD'|'UHD'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
