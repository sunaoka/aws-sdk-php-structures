<?php

namespace Sunaoka\Aws\Structures\EventBridge\CreateEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property Shapes\RoutingConfig $RoutingConfig
 * @property Shapes\ReplicationConfig|null $ReplicationConfig
 * @property list<Shapes\EndpointEventBus> $EventBuses
 * @property string|null $RoleArn
 */
class CreateEndpointRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     RoutingConfig: Shapes\RoutingConfig,
     *     ReplicationConfig?: Shapes\ReplicationConfig|null,
     *     EventBuses: list<Shapes\EndpointEventBus>,
     *     RoleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
