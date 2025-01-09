<?php

namespace Sunaoka\Aws\Structures\AutoScaling\UpdateAutoScalingGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'balanced-only'|'balanced-best-effort' $CapacityDistributionStrategy
 */
class AvailabilityZoneDistribution extends Shape
{
    /**
     * @param array{CapacityDistributionStrategy?: 'balanced-only'|'balanced-best-effort'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
