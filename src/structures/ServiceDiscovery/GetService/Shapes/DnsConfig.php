<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\GetService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NamespaceId
 * @property 'MULTIVALUE'|'WEIGHTED'|null $RoutingPolicy
 * @property list<DnsRecord> $DnsRecords
 */
class DnsConfig extends Shape
{
    /**
     * @param array{
     *     NamespaceId?: string|null,
     *     RoutingPolicy?: 'MULTIVALUE'|'WEIGHTED'|null,
     *     DnsRecords: list<DnsRecord>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
