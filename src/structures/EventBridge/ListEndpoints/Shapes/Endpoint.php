<?php

namespace Sunaoka\Aws\Structures\EventBridge\ListEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Description
 * @property string $Arn
 * @property RoutingConfig $RoutingConfig
 * @property ReplicationConfig $ReplicationConfig
 * @property list<EndpointEventBus> $EventBuses
 * @property string $RoleArn
 * @property string $EndpointId
 * @property string $EndpointUrl
 * @property 'ACTIVE'|'CREATING'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED' $State
 * @property string $StateReason
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 */
class Endpoint extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Description?: string,
     *     Arn?: string,
     *     RoutingConfig?: RoutingConfig,
     *     ReplicationConfig?: ReplicationConfig,
     *     EventBuses?: list<EndpointEventBus>,
     *     RoleArn?: string,
     *     EndpointId?: string,
     *     EndpointUrl?: string,
     *     State?: 'ACTIVE'|'CREATING'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED',
     *     StateReason?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
