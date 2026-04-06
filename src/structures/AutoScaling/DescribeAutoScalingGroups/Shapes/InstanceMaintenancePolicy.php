<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeAutoScalingGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<-1, 100>|null $MinHealthyPercentage
 * @property int<-1, 200>|null $MaxHealthyPercentage
 */
class InstanceMaintenancePolicy extends Shape
{
    /**
     * @param array{
     *     MinHealthyPercentage?: int<-1, 100>|null,
     *     MaxHealthyPercentage?: int<-1, 200>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
