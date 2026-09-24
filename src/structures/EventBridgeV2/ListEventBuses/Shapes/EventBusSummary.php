<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\ListEventBuses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $EventBusArn
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property 'CREATING'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'DELETING'|'ACTIVE'|'DELETE_FAILED'|null $State
 * @property string|null $StateReason
 * @property string|null $EventBusAccountId
 */
class EventBusSummary extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     EventBusArn?: string|null,
     *     Description?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     State?: 'CREATING'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'DELETING'|'ACTIVE'|'DELETE_FAILED'|null,
     *     StateReason?: string|null,
     *     EventBusAccountId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
