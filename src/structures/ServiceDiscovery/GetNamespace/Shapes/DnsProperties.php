<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\GetNamespace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HostedZoneId
 * @property SOA $SOA
 */
class DnsProperties extends Shape
{
    /**
     * @param array{
     *     HostedZoneId?: string,
     *     SOA?: SOA
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
