<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Ipv6Prefix
 */
class InstanceIpv6Prefix extends Shape
{
    /**
     * @param array{Ipv6Prefix?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
