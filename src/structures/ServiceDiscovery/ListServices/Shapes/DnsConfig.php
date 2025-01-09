<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\ListServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NamespaceId
 * @property 'MULTIVALUE'|'WEIGHTED' $RoutingPolicy
 * @property list<DnsRecord> $DnsRecords
 */
class DnsConfig extends Shape
{
    /**
     * @param array{
     *     NamespaceId?: string,
     *     RoutingPolicy?: 'MULTIVALUE'|'WEIGHTED',
     *     DnsRecords: list<DnsRecord>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
