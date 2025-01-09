<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\CreateService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $NamespaceId
 * @property string $CreatorRequestId
 * @property string $Description
 * @property Shapes\DnsConfig $DnsConfig
 * @property Shapes\HealthCheckConfig $HealthCheckConfig
 * @property Shapes\HealthCheckCustomConfig $HealthCheckCustomConfig
 * @property list<Shapes\Tag> $Tags
 * @property 'HTTP' $Type
 */
class CreateServiceRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     NamespaceId?: string,
     *     CreatorRequestId?: string,
     *     Description?: string,
     *     DnsConfig?: Shapes\DnsConfig,
     *     HealthCheckConfig?: Shapes\HealthCheckConfig,
     *     HealthCheckCustomConfig?: Shapes\HealthCheckCustomConfig,
     *     Tags?: list<Shapes\Tag>,
     *     Type?: 'HTTP'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
