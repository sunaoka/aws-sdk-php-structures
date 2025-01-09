<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\DeleteResolverRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Ip
 * @property int $Port
 * @property string $Ipv6
 * @property 'DoH'|'Do53'|'DoH-FIPS' $Protocol
 * @property string $ServerNameIndication
 */
class TargetAddress extends Shape
{
    /**
     * @param array{
     *     Ip?: string,
     *     Port?: int,
     *     Ipv6?: string,
     *     Protocol?: 'DoH'|'Do53'|'DoH-FIPS',
     *     ServerNameIndication?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
