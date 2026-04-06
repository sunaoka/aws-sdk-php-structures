<?php

namespace Sunaoka\Aws\Structures\AutoScaling\CreateAutoScalingGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'balanced-only'|'balanced-best-effort'|null $CapacityDistributionStrategy
 */
class AvailabilityZoneDistribution extends Shape
{
    /**
     * @param array{CapacityDistributionStrategy?: 'balanced-only'|'balanced-best-effort'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
