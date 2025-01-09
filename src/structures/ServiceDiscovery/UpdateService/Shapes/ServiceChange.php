<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\UpdateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property DnsConfigChange $DnsConfig
 * @property HealthCheckConfig $HealthCheckConfig
 */
class ServiceChange extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     DnsConfig?: DnsConfigChange,
     *     HealthCheckConfig?: HealthCheckConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
