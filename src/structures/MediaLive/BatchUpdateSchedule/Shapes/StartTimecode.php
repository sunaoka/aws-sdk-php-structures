<?php

namespace Sunaoka\Aws\Structures\MediaLive\BatchUpdateSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Timecode
 */
class StartTimecode extends Shape
{
    /**
     * @param array{Timecode?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
