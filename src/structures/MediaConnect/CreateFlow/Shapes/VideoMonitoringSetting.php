<?php

namespace Sunaoka\Aws\Structures\MediaConnect\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BlackFrames $BlackFrames
 * @property FrozenFrames $FrozenFrames
 */
class VideoMonitoringSetting extends Shape
{
    /**
     * @param array{
     *     BlackFrames?: BlackFrames,
     *     FrozenFrames?: FrozenFrames
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
