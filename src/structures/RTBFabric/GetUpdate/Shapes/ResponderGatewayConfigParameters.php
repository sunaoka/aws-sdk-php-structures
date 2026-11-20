<?php

namespace Sunaoka\Aws\Structures\RTBFabric\GetUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $description
 * @property 'AVAILABILITY_ZONE_AFFINITY'|'ANY_AVAILABILITY_ZONE'|null $clientRoutingPolicy
 * @property string|null $domainName
 * @property int $port
 * @property 'HTTP'|'HTTPS' $protocol
 * @property ListenerConfig|null $listenerConfig
 * @property TrustStoreConfiguration|null $trustStoreConfiguration
 * @property ManagedEndpointConfiguration|null $managedEndpointConfiguration
 */
class ResponderGatewayConfigParameters extends Shape
{
    /**
     * @param array{
     *     description?: string|null,
     *     clientRoutingPolicy?: 'AVAILABILITY_ZONE_AFFINITY'|'ANY_AVAILABILITY_ZONE'|null,
     *     domainName?: string|null,
     *     port: int,
     *     protocol: 'HTTP'|'HTTPS',
     *     listenerConfig?: ListenerConfig|null,
     *     trustStoreConfiguration?: TrustStoreConfiguration|null,
     *     managedEndpointConfiguration?: ManagedEndpointConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
