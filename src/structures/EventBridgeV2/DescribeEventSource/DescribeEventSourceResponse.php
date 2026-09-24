<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\DescribeEventSource;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $EventSourceArn
 * @property string|null $Name
 * @property string|null $EventBusArn
 * @property Shapes\EventSourceConfiguration|null $Configuration
 * @property string|null $Description
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETING'|'DELETE_FAILED'|null $State
 * @property bool|null $Revoked
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 */
class DescribeEventSourceResponse extends Response
{
}
