<?php

namespace Sunaoka\Aws\Structures\MediaLive\BatchUpdateSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EXCLUDE_LAST_FRAME'|'INCLUDE_LAST_FRAME'|null $LastFrameClippingBehavior
 * @property string|null $Timecode
 */
class StopTimecode extends Shape
{
    /**
     * @param array{
     *     LastFrameClippingBehavior?: 'EXCLUDE_LAST_FRAME'|'INCLUDE_LAST_FRAME'|null,
     *     Timecode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
