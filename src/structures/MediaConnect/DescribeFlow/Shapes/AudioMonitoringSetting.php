<?php

namespace Sunaoka\Aws\Structures\MediaConnect\DescribeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SilentAudio|null $SilentAudio
 */
class AudioMonitoringSetting extends Shape
{
    /**
     * @param array{SilentAudio?: SilentAudio|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
