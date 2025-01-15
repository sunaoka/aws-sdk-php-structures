<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\DiscoverInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceId
 * @property string|null $NamespaceName
 * @property string|null $ServiceName
 * @property 'HEALTHY'|'UNHEALTHY'|'UNKNOWN'|null $HealthStatus
 * @property array<string, string>|null $Attributes
 */
class HttpInstanceSummary extends Shape
{
    /**
     * @param array{
     *     InstanceId?: string|null,
     *     NamespaceName?: string|null,
     *     ServiceName?: string|null,
     *     HealthStatus?: 'HEALTHY'|'UNHEALTHY'|'UNKNOWN'|null,
     *     Attributes?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
