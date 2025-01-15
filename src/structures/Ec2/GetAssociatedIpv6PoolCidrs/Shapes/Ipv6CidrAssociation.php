<?php

namespace Sunaoka\Aws\Structures\Ec2\GetAssociatedIpv6PoolCidrs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Ipv6Cidr
 * @property string|null $AssociatedResource
 */
class Ipv6CidrAssociation extends Shape
{
    /**
     * @param array{
     *     Ipv6Cidr?: string|null,
     *     AssociatedResource?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
