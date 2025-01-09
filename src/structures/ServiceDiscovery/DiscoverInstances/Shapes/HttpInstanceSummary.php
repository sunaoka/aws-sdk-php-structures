<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\DiscoverInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceId
 * @property string $NamespaceName
 * @property string $ServiceName
 * @property 'HEALTHY'|'UNHEALTHY'|'UNKNOWN' $HealthStatus
 * @property array<string, string> $Attributes
 */
class HttpInstanceSummary extends Shape
{
    /**
     * @param array{
     *     InstanceId?: string,
     *     NamespaceName?: string,
     *     ServiceName?: string,
     *     HealthStatus?: 'HEALTHY'|'UNHEALTHY'|'UNKNOWN',
     *     Attributes?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
