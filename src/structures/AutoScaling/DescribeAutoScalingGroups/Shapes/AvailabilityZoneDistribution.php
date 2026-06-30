<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeAutoScalingGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'balanced-only'|'balanced-best-effort'|'reservations-then-balanced'|null $CapacityDistributionStrategy
 */
class AvailabilityZoneDistribution extends Shape
{
    /**
     * @param array{CapacityDistributionStrategy?: 'balanced-only'|'balanced-best-effort'|'reservations-then-balanced'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
