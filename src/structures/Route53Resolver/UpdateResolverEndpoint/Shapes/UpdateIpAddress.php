<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\UpdateResolverEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IpId
 * @property string $Ipv6
 */
class UpdateIpAddress extends Shape
{
    /**
     * @param array{
     *     IpId: string,
     *     Ipv6: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
