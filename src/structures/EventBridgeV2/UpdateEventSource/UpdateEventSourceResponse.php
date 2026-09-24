<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\UpdateEventSource;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $EventSourceArn
 * @property string|null $Name
 * @property string|null $EventBusArn
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETING'|'DELETE_FAILED'|null $State
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 */
class UpdateEventSourceResponse extends Response
{
}
