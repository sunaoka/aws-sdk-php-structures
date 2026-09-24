<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\ListSubscribers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SubscriberArn
 * @property string|null $Name
 * @property string|null $EventBusArn
 * @property string|null $TargetArn
 * @property 'FIFO'|'UNORDERED'|null $Type
 * @property bool|null $Revoked
 * @property 'RUNNING'|'STOPPED'|null $State
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string|null $SubscriberAccountId
 */
class SubscriberSummary extends Shape
{
    /**
     * @param array{
     *     SubscriberArn?: string|null,
     *     Name?: string|null,
     *     EventBusArn?: string|null,
     *     TargetArn?: string|null,
     *     Type?: 'FIFO'|'UNORDERED'|null,
     *     Revoked?: bool|null,
     *     State?: 'RUNNING'|'STOPPED'|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     SubscriberAccountId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
