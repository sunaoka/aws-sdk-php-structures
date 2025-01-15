<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\DiscoverInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NamespaceName
 * @property string $ServiceName
 * @property int<1, 1000>|null $MaxResults
 * @property array<string, string>|null $QueryParameters
 * @property array<string, string>|null $OptionalParameters
 * @property 'HEALTHY'|'UNHEALTHY'|'ALL'|'HEALTHY_OR_ELSE_ALL'|null $HealthStatus
 */
class DiscoverInstancesRequest extends Request
{
    /**
     * @param array{
     *     NamespaceName: string,
     *     ServiceName: string,
     *     MaxResults?: int<1, 1000>|null,
     *     QueryParameters?: array<string, string>|null,
     *     OptionalParameters?: array<string, string>|null,
     *     HealthStatus?: 'HEALTHY'|'UNHEALTHY'|'ALL'|'HEALTHY_OR_ELSE_ALL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
