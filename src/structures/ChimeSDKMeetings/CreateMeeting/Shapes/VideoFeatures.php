<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMeetings\CreateMeeting\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'None'|'HD'|'FHD' $MaxResolution
 */
class VideoFeatures extends Shape
{
    /**
     * @param array{MaxResolution?: 'None'|'HD'|'FHD'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
