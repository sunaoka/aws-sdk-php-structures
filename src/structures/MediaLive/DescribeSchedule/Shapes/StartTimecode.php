<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Timecode
 */
class StartTimecode extends Shape
{
    /**
     * @param array{Timecode?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
