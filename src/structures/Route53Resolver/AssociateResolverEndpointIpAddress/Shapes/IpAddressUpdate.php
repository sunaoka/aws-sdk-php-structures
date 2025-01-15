<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\AssociateResolverEndpointIpAddress\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IpId
 * @property string|null $SubnetId
 * @property string|null $Ip
 * @property string|null $Ipv6
 */
class IpAddressUpdate extends Shape
{
    /**
     * @param array{
     *     IpId?: string|null,
     *     SubnetId?: string|null,
     *     Ip?: string|null,
     *     Ipv6?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
