<?php

namespace Sunaoka\Aws\Structures\EventBridge\UpdateEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property Shapes\RoutingConfig|null $RoutingConfig
 * @property Shapes\ReplicationConfig|null $ReplicationConfig
 * @property list<Shapes\EndpointEventBus>|null $EventBuses
 * @property string|null $RoleArn
 */
class UpdateEndpointRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     RoutingConfig?: Shapes\RoutingConfig|null,
     *     ReplicationConfig?: Shapes\ReplicationConfig|null,
     *     EventBuses?: list<Shapes\EndpointEventBus>|null,
     *     RoleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
