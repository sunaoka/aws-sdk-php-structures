<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\GetNamespace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $HostedZoneId
 * @property SOA|null $SOA
 */
class DnsProperties extends Shape
{
    /**
     * @param array{
     *     HostedZoneId?: string|null,
     *     SOA?: SOA|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
