<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Ipv6Address
 * @property bool $IsPrimaryIpv6
 */
class InstanceIpv6Address extends Shape
{
    /**
     * @param array{
     *     Ipv6Address?: string,
     *     IsPrimaryIpv6?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
