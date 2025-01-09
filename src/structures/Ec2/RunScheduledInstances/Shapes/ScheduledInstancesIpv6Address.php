<?php

namespace Sunaoka\Aws\Structures\Ec2\RunScheduledInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Ipv6Address
 */
class ScheduledInstancesIpv6Address extends Shape
{
    /**
     * @param array{Ipv6Address?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
