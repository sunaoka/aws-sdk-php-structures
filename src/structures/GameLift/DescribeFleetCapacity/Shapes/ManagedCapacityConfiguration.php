<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeFleetCapacity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MANUAL'|'SCALE_TO_AND_FROM_ZERO'|null $ZeroCapacityStrategy
 * @property int<5, 1440>|null $ScaleInAfterInactivityMinutes
 */
class ManagedCapacityConfiguration extends Shape
{
    /**
     * @param array{
     *     ZeroCapacityStrategy?: 'MANUAL'|'SCALE_TO_AND_FROM_ZERO'|null,
     *     ScaleInAfterInactivityMinutes?: int<5, 1440>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
