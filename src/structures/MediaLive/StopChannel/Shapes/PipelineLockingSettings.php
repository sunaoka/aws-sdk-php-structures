<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SOURCE_TIMECODE'|'VIDEO_ALIGNMENT'|null $PipelineLockingMethod
 * @property string|null $CustomEpoch
 */
class PipelineLockingSettings extends Shape
{
    /**
     * @param array{
     *     PipelineLockingMethod?: 'SOURCE_TIMECODE'|'VIDEO_ALIGNMENT'|null,
     *     CustomEpoch?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
