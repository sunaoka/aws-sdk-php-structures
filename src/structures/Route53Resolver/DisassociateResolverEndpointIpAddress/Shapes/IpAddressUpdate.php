<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\DisassociateResolverEndpointIpAddress\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IpId
 * @property string $SubnetId
 * @property string $Ip
 * @property string $Ipv6
 */
class IpAddressUpdate extends Shape
{
    /**
     * @param array{
     *     IpId?: string,
     *     SubnetId?: string,
     *     Ip?: string,
     *     Ipv6?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
