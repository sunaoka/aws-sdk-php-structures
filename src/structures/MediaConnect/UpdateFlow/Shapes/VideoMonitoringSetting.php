<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BlackFrames|null $BlackFrames
 * @property FrozenFrames|null $FrozenFrames
 */
class VideoMonitoringSetting extends Shape
{
    /**
     * @param array{
     *     BlackFrames?: BlackFrames|null,
     *     FrozenFrames?: FrozenFrames|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
