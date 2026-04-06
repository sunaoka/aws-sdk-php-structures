<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\UpdateResolverRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Ip
 * @property int<0, 65535>|null $Port
 * @property string|null $Ipv6
 * @property 'DoH'|'Do53'|'DoH-FIPS'|null $Protocol
 * @property string|null $ServerNameIndication
 */
class TargetAddress extends Shape
{
    /**
     * @param array{
     *     Ip?: string|null,
     *     Port?: int<0, 65535>|null,
     *     Ipv6?: string|null,
     *     Protocol?: 'DoH'|'Do53'|'DoH-FIPS'|null,
     *     ServerNameIndication?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
