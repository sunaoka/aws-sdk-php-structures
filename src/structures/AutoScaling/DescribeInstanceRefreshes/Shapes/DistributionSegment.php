<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeInstanceRefreshes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'on-demand-capacity-reservation'|'capacity-block'|'interruptible-capacity-reservation'|'on-demand'>|null $TargetCapacityTypes
 */
class DistributionSegment extends Shape
{
    /**
     * @param array{TargetCapacityTypes?: list<'on-demand-capacity-reservation'|'capacity-block'|'interruptible-capacity-reservation'|'on-demand'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
