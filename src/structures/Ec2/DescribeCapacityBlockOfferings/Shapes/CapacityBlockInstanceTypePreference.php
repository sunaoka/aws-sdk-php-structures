<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCapacityBlockOfferings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceType
 */
class CapacityBlockInstanceTypePreference extends Shape
{
    /**
     * @param array{InstanceType?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
