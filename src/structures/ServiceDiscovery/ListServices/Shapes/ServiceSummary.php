<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\ListServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Arn
 * @property string|null $Name
 * @property 'HTTP'|'DNS_HTTP'|'DNS'|null $Type
 * @property string|null $Description
 * @property int|null $InstanceCount
 * @property DnsConfig|null $DnsConfig
 * @property HealthCheckConfig|null $HealthCheckConfig
 * @property HealthCheckCustomConfig|null $HealthCheckCustomConfig
 * @property \Aws\Api\DateTimeResult|null $CreateDate
 */
class ServiceSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Arn?: string|null,
     *     Name?: string|null,
     *     Type?: 'HTTP'|'DNS_HTTP'|'DNS'|null,
     *     Description?: string|null,
     *     InstanceCount?: int|null,
     *     DnsConfig?: DnsConfig|null,
     *     HealthCheckConfig?: HealthCheckConfig|null,
     *     HealthCheckCustomConfig?: HealthCheckCustomConfig|null,
     *     CreateDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
