<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SOURCE_TIMECODE'|'VIDEO_ALIGNMENT'|null $PipelineLockingMethod
 */
class PipelineLockingSettings extends Shape
{
    /**
     * @param array{PipelineLockingMethod?: 'SOURCE_TIMECODE'|'VIDEO_ALIGNMENT'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
