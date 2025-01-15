<?php

namespace Sunaoka\Aws\Structures\EventBridge\ListEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $Arn
 * @property RoutingConfig|null $RoutingConfig
 * @property ReplicationConfig|null $ReplicationConfig
 * @property list<EndpointEventBus>|null $EventBuses
 * @property string|null $RoleArn
 * @property string|null $EndpointId
 * @property string|null $EndpointUrl
 * @property 'ACTIVE'|'CREATING'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED'|null $State
 * @property string|null $StateReason
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 */
class Endpoint extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Description?: string|null,
     *     Arn?: string|null,
     *     RoutingConfig?: RoutingConfig|null,
     *     ReplicationConfig?: ReplicationConfig|null,
     *     EventBuses?: list<EndpointEventBus>|null,
     *     RoleArn?: string|null,
     *     EndpointId?: string|null,
     *     EndpointUrl?: string|null,
     *     State?: 'ACTIVE'|'CREATING'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED'|null,
     *     StateReason?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
