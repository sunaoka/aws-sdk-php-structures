<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamRouteOriginAuthorizations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Cidr
 * @property string|null $Asn
 * @property int|null $MaxLength
 */
class IpamRouteOriginAuthorizationInfo extends Shape
{
    /**
     * @param array{
     *     Cidr?: string|null,
     *     Asn?: string|null,
     *     MaxLength?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
