<?php

namespace Sunaoka\Aws\Structures\Kinesis\ListQueues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $QueueName
 * @property string $QueueARN
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING' $QueueStatus
 * @property \Aws\Api\DateTimeResult $QueueCreationTimestamp
 * @property list<QueueStreamIdentifier> $Streams
 */
class QueueSummary extends Shape
{
    /**
     * @param array{
     *     QueueName: string,
     *     QueueARN: string,
     *     QueueStatus: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING',
     *     QueueCreationTimestamp: \Aws\Api\DateTimeResult,
     *     Streams: list<QueueStreamIdentifier>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
