<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMeetings\GetMeeting\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'None'|'FHD'|'UHD' $MaxResolution
 */
class ContentFeatures extends Shape
{
    /**
     * @param array{MaxResolution?: 'None'|'FHD'|'UHD'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
