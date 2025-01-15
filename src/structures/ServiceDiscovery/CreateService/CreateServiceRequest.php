<?php

namespace Sunaoka\Aws\Structures\ServiceDiscovery\CreateService;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $NamespaceId
 * @property string|null $CreatorRequestId
 * @property string|null $Description
 * @property Shapes\DnsConfig|null $DnsConfig
 * @property Shapes\HealthCheckConfig|null $HealthCheckConfig
 * @property Shapes\HealthCheckCustomConfig|null $HealthCheckCustomConfig
 * @property list<Shapes\Tag>|null $Tags
 * @property 'HTTP'|null $Type
 */
class CreateServiceRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     NamespaceId?: string|null,
     *     CreatorRequestId?: string|null,
     *     Description?: string|null,
     *     DnsConfig?: Shapes\DnsConfig|null,
     *     HealthCheckConfig?: Shapes\HealthCheckConfig|null,
     *     HealthCheckCustomConfig?: Shapes\HealthCheckCustomConfig|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     Type?: 'HTTP'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
