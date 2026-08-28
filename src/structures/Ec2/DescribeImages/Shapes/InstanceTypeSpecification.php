<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeImages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<InstanceTypeItem>|null $SupportedInstanceTypes
 * @property list<InstanceTypeItem>|null $UnsupportedInstanceTypes
 */
class InstanceTypeSpecification extends Shape
{
    /**
     * @param array{
     *     SupportedInstanceTypes?: list<InstanceTypeItem>|null,
     *     UnsupportedInstanceTypes?: list<InstanceTypeItem>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
