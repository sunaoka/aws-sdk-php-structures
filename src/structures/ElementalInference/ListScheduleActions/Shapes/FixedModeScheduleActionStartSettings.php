<?php

namespace Sunaoka\Aws\Structures\ElementalInference\ListScheduleActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $scheduledAt
 */
class FixedModeScheduleActionStartSettings extends Shape
{
    /**
     * @param array{scheduledAt: \Aws\Api\DateTimeResult} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
