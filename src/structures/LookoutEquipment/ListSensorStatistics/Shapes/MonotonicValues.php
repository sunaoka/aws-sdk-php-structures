<?php

namespace Sunaoka\Aws\Structures\LookoutEquipment\ListSensorStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'POTENTIAL_ISSUE_DETECTED'|'NO_ISSUE_DETECTED' $Status
 * @property 'DECREASING'|'INCREASING'|'STATIC'|null $Monotonicity
 */
class MonotonicValues extends Shape
{
    /**
     * @param array{
     *     Status: 'POTENTIAL_ISSUE_DETECTED'|'NO_ISSUE_DETECTED',
     *     Monotonicity?: 'DECREASING'|'INCREASING'|'STATIC'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
