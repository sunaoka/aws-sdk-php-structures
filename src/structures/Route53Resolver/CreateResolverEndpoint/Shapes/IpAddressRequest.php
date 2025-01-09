<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\CreateResolverEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SubnetId
 * @property string $Ip
 * @property string $Ipv6
 */
class IpAddressRequest extends Shape
{
    /**
     * @param array{
     *     SubnetId: string,
     *     Ip?: string,
     *     Ipv6?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
