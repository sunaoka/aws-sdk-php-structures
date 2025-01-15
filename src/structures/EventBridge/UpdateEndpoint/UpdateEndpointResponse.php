<?php

namespace Sunaoka\Aws\Structures\EventBridge\UpdateEndpoint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Name
 * @property string|null $Arn
 * @property Shapes\RoutingConfig|null $RoutingConfig
 * @property Shapes\ReplicationConfig|null $ReplicationConfig
 * @property list<Shapes\EndpointEventBus>|null $EventBuses
 * @property string|null $RoleArn
 * @property string|null $EndpointId
 * @property string|null $EndpointUrl
 * @property 'ACTIVE'|'CREATING'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED'|null $State
 */
class UpdateEndpointResponse extends Response
{
}
