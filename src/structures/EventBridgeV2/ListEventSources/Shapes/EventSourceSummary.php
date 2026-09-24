<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\ListEventSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EventSourceArn
 * @property string|null $Name
 * @property string|null $EventBusArn
 * @property 'AWS_SERVICE_EVENTS'|'PARTNER_EVENTS'|null $Type
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETING'|'DELETE_FAILED'|null $State
 * @property bool|null $Revoked
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string|null $EventSourceAccountId
 */
class EventSourceSummary extends Shape
{
    /**
     * @param array{
     *     EventSourceArn?: string|null,
     *     Name?: string|null,
     *     EventBusArn?: string|null,
     *     Type?: 'AWS_SERVICE_EVENTS'|'PARTNER_EVENTS'|null,
     *     State?: 'CREATING'|'ACTIVE'|'UPDATING'|'CREATE_FAILED'|'UPDATE_FAILED'|'DELETING'|'DELETE_FAILED'|null,
     *     Revoked?: bool|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     EventSourceAccountId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
