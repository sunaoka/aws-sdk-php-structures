<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\ListServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Arn
 * @property string $Name
 * @property 'HTTP'|'DNS_HTTP'|'DNS' $Type
 * @property string $Description
 * @property int $InstanceCount
 * @property DnsConfig $DnsConfig
 * @property HealthCheckConfig $HealthCheckConfig
 * @property HealthCheckCustomConfig $HealthCheckCustomConfig
 * @property \Aws\Api\DateTimeResult $CreateDate
 */
class ServiceSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Arn?: string,
     *     Name?: string,
     *     Type?: 'HTTP'|'DNS_HTTP'|'DNS',
     *     Description?: string,
     *     InstanceCount?: int,
     *     DnsConfig?: DnsConfig,
     *     HealthCheckConfig?: HealthCheckConfig,
     *     HealthCheckCustomConfig?: HealthCheckCustomConfig,
     *     CreateDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
