<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\GetService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Arn
 * @property string|null $ResourceOwner
 * @property string|null $Name
 * @property string|null $NamespaceId
 * @property string|null $Description
 * @property int|null $InstanceCount
 * @property DnsConfig|null $DnsConfig
 * @property 'HTTP'|'DNS_HTTP'|'DNS'|null $Type
 * @property HealthCheckConfig|null $HealthCheckConfig
 * @property HealthCheckCustomConfig|null $HealthCheckCustomConfig
 * @property \Aws\Api\DateTimeResult|null $CreateDate
 * @property string|null $CreatorRequestId
 * @property string|null $CreatedByAccount
 */
class Service extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Arn?: string|null,
     *     ResourceOwner?: string|null,
     *     Name?: string|null,
     *     NamespaceId?: string|null,
     *     Description?: string|null,
     *     InstanceCount?: int|null,
     *     DnsConfig?: DnsConfig|null,
     *     Type?: 'HTTP'|'DNS_HTTP'|'DNS'|null,
     *     HealthCheckConfig?: HealthCheckConfig|null,
     *     HealthCheckCustomConfig?: HealthCheckCustomConfig|null,
     *     CreateDate?: \Aws\Api\DateTimeResult|null,
     *     CreatorRequestId?: string|null,
     *     CreatedByAccount?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
