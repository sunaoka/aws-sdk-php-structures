<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\CreateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Arn
 * @property string $Name
 * @property string $NamespaceId
 * @property string $Description
 * @property int $InstanceCount
 * @property DnsConfig $DnsConfig
 * @property 'HTTP'|'DNS_HTTP'|'DNS' $Type
 * @property HealthCheckConfig $HealthCheckConfig
 * @property HealthCheckCustomConfig $HealthCheckCustomConfig
 * @property \Aws\Api\DateTimeResult $CreateDate
 * @property string $CreatorRequestId
 */
class Service extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Arn?: string,
     *     Name?: string,
     *     NamespaceId?: string,
     *     Description?: string,
     *     InstanceCount?: int,
     *     DnsConfig?: DnsConfig,
     *     Type?: 'HTTP'|'DNS_HTTP'|'DNS',
     *     HealthCheckConfig?: HealthCheckConfig,
     *     HealthCheckCustomConfig?: HealthCheckCustomConfig,
     *     CreateDate?: \Aws\Api\DateTimeResult,
     *     CreatorRequestId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
