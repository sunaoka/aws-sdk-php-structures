<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceType
 */
class InstanceTypeItem extends Shape
{
    /**
     * @param array{InstanceType?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
