<?php

namespace Sunaoka\Aws\Structures\AutoScaling\CreateAutoScalingGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MinHealthyPercentage
 * @property int $MaxHealthyPercentage
 */
class InstanceMaintenancePolicy extends Shape
{
    /**
     * @param array{
     *     MinHealthyPercentage?: int,
     *     MaxHealthyPercentage?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
