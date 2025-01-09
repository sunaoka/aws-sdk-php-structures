<?php

namespace Sunaoka\Aws\Structures\Ec2\ProvisionIpamPoolCidr\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'cidr-not-available'|'limit-exceeded' $Code
 * @property string $Message
 */
class IpamPoolCidrFailureReason extends Shape
{
    /**
     * @param array{
     *     Code?: 'cidr-not-available'|'limit-exceeded',
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
