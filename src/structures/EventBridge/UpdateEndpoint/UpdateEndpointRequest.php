<?php

namespace Sunaoka\Aws\Structures\EventBridge\UpdateEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property Shapes\RoutingConfig $RoutingConfig
 * @property Shapes\ReplicationConfig $ReplicationConfig
 * @property list<Shapes\EndpointEventBus> $EventBuses
 * @property string $RoleArn
 */
class UpdateEndpointRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     RoutingConfig?: Shapes\RoutingConfig,
     *     ReplicationConfig?: Shapes\ReplicationConfig,
     *     EventBuses?: list<Shapes\EndpointEventBus>,
     *     RoleArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
