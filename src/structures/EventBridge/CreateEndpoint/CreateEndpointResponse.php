<?php

namespace Sunaoka\Aws\Structures\EventBridge\CreateEndpoint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Name
 * @property string $Arn
 * @property Shapes\RoutingConfig $RoutingConfig
 * @property Shapes\ReplicationConfig $ReplicationConfig
 * @property list<Shapes\EndpointEventBus> $EventBuses
 * @property string $RoleArn
 * @property 'ACTIVE'|'CREATING'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED' $State
 */
class CreateEndpointResponse extends Response
{
}
