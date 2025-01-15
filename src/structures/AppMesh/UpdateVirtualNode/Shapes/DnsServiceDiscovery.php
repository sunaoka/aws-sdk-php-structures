<?php

namespace Sunaoka\Aws\Structures\AppMesh\UpdateVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $hostname
 * @property 'IPv6_PREFERRED'|'IPv4_PREFERRED'|'IPv4_ONLY'|'IPv6_ONLY'|null $ipPreference
 * @property 'LOADBALANCER'|'ENDPOINTS'|null $responseType
 */
class DnsServiceDiscovery extends Shape
{
    /**
     * @param array{
     *     hostname: string,
     *     ipPreference?: 'IPv6_PREFERRED'|'IPv4_PREFERRED'|'IPv4_ONLY'|'IPv6_ONLY'|null,
     *     responseType?: 'LOADBALANCER'|'ENDPOINTS'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
