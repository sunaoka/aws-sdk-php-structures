<?php

namespace Sunaoka\Aws\Structures\AppMesh\DeleteVirtualNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $hostname
 * @property 'IPv6_PREFERRED'|'IPv4_PREFERRED'|'IPv4_ONLY'|'IPv6_ONLY' $ipPreference
 * @property 'LOADBALANCER'|'ENDPOINTS' $responseType
 */
class DnsServiceDiscovery extends Shape
{
    /**
     * @param array{
     *     hostname: string,
     *     ipPreference?: 'IPv6_PREFERRED'|'IPv4_PREFERRED'|'IPv4_ONLY'|'IPv6_ONLY',
     *     responseType?: 'LOADBALANCER'|'ENDPOINTS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
