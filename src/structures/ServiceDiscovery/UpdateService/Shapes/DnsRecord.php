<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\UpdateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SRV'|'A'|'AAAA'|'CNAME' $Type
 * @property int<0, 2147483647> $TTL
 */
class DnsRecord extends Shape
{
    /**
     * @param array{
     *     Type: 'SRV'|'A'|'AAAA'|'CNAME',
     *     TTL: int<0, 2147483647>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
