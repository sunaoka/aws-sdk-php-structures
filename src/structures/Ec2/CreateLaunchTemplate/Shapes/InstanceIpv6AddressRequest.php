<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLaunchTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Ipv6Address
 */
class InstanceIpv6AddressRequest extends Shape
{
    /**
     * @param array{Ipv6Address?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
