<?php

namespace Sunaoka\Aws\Structures\EventBridge\DescribeEndpoint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Name
 * @property string $Description
 * @property string $Arn
 * @property Shapes\RoutingConfig $RoutingConfig
 * @property Shapes\ReplicationConfig $ReplicationConfig
 * @property list<Shapes\EndpointEventBus> $EventBuses
 * @property string $RoleArn
 * @property string $EndpointId
 * @property string $EndpointUrl
 * @property 'ACTIVE'|'CREATING'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETE_FAILED' $State
 * @property string $StateReason
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 */
class DescribeEndpointResponse extends Response
{
}
