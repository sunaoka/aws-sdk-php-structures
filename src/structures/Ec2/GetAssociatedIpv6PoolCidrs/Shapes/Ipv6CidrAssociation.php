<?php

namespace Sunaoka\Aws\Structures\Ec2\GetAssociatedIpv6PoolCidrs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Ipv6Cidr
 * @property string $AssociatedResource
 */
class Ipv6CidrAssociation extends Shape
{
    /**
     * @param array{
     *     Ipv6Cidr?: string,
     *     AssociatedResource?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
