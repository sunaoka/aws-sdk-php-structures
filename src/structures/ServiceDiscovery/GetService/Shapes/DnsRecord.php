<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\GetService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SRV'|'A'|'AAAA'|'CNAME' $Type
 * @property int $TTL
 */
class DnsRecord extends Shape
{
    /**
     * @param array{
     *     Type: 'SRV'|'A'|'AAAA'|'CNAME',
     *     TTL: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
