<?php

namespace Sunaoka\Aws\Structures\EventBridge\UpdateEndpoint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Name
 * @property string $Arn
 * @property Shapes\RoutingConfig $RoutingConfig
 * @property Shapes\ReplicationConfig $ReplicationConfig
 * @property list<Shapes\EndpointEventBus> $EventBuses
 * @property string $RoleArn
 * @property string $EndpointId
 * @property string $EndpointUrl
 * @property 'ACTIVE'|'CREATING'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED' $State
 */
class UpdateEndpointResponse extends Response
{
}
