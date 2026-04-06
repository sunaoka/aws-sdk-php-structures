<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMeetings\CreateMeeting\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'None'|'HD'|'FHD'|null $MaxResolution
 */
class VideoFeatures extends Shape
{
    /**
     * @param array{MaxResolution?: 'None'|'HD'|'FHD'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
