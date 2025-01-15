<?php

namespace Sunaoka\Aws\Structures\Ec2\RunInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Ipv6Prefix
 */
class InstanceIpv6Prefix extends Shape
{
    /**
     * @param array{Ipv6Prefix?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
