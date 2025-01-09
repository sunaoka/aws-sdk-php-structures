<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\DiscoverInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NamespaceName
 * @property string $ServiceName
 * @property int $MaxResults
 * @property array<string, string> $QueryParameters
 * @property array<string, string> $OptionalParameters
 * @property 'HEALTHY'|'UNHEALTHY'|'ALL'|'HEALTHY_OR_ELSE_ALL' $HealthStatus
 */
class DiscoverInstancesRequest extends Request
{
    /**
     * @param array{
     *     NamespaceName: string,
     *     ServiceName: string,
     *     MaxResults?: int,
     *     QueryParameters?: array<string, string>,
     *     OptionalParameters?: array<string, string>,
     *     HealthStatus?: 'HEALTHY'|'UNHEALTHY'|'ALL'|'HEALTHY_OR_ELSE_ALL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
