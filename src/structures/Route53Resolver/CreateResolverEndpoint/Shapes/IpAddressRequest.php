<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\CreateResolverEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SubnetId
 * @property string|null $Ip
 * @property string|null $Ipv6
 */
class IpAddressRequest extends Shape
{
    /**
     * @param array{
     *     SubnetId: string,
     *     Ip?: string|null,
     *     Ipv6?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
