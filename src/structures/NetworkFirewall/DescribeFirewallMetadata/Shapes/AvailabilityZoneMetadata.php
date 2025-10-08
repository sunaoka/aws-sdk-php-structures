<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeFirewallMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DUALSTACK'|'IPV4'|'IPV6'|null $IPAddressType
 */
class AvailabilityZoneMetadata extends Shape
{
    /**
     * @param array{IPAddressType?: 'DUALSTACK'|'IPV4'|'IPV6'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
