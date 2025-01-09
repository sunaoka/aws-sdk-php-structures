<?php

namespace Sunaoka\Aws\Structures\AutoScaling\CreateAutoScalingGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<-1, 100> $MinHealthyPercentage
 * @property int<-1, 200> $MaxHealthyPercentage
 */
class InstanceMaintenancePolicy extends Shape
{
    /**
     * @param array{
     *     MinHealthyPercentage?: int<-1, 100>,
     *     MaxHealthyPercentage?: int<-1, 200>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
