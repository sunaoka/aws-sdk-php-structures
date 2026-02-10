<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PrivateIpAddress
 */
class InstanceSecondaryInterfacePrivateIpAddress extends Shape
{
    /**
     * @param array{PrivateIpAddress?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
