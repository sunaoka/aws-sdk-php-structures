<?php

namespace Sunaoka\Aws\Structures\Ec2\DeprovisionIpamPoolCidr\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'cidr-not-available'|'limit-exceeded'|null $Code
 * @property string|null $Message
 */
class IpamPoolCidrFailureReason extends Shape
{
    /**
     * @param array{
     *     Code?: 'cidr-not-available'|'limit-exceeded'|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
