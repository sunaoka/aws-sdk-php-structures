<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\UpdateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property DnsConfigChange|null $DnsConfig
 * @property HealthCheckConfig|null $HealthCheckConfig
 */
class ServiceChange extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     DnsConfig?: DnsConfigChange|null,
     *     HealthCheckConfig?: HealthCheckConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
