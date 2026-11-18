<?php

namespace Sunaoka\Aws\Structures\Kinesis\UpdateQueue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $QueueName
 * @property string $QueueARN
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING' $QueueStatus
 * @property \Aws\Api\DateTimeResult $QueueCreationTimestamp
 * @property list<QueueStreamConfiguration> $StreamConfigurationList
 * @property QueueAttributes|null $QueueAttributes
 */
class QueueDescription extends Shape
{
    /**
     * @param array{
     *     QueueName: string,
     *     QueueARN: string,
     *     QueueStatus: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING',
     *     QueueCreationTimestamp: \Aws\Api\DateTimeResult,
     *     StreamConfigurationList: list<QueueStreamConfiguration>,
     *     QueueAttributes?: QueueAttributes|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
