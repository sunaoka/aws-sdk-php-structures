<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Time
 */
class FixedModeScheduleActionStartSettings extends Shape
{
    /**
     * @param array{Time: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
