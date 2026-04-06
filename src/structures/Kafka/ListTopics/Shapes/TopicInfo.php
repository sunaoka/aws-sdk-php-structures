<?php

namespace Sunaoka\Aws\Structures\Kafka\ListTopics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TopicArn
 * @property string|null $TopicName
 * @property int|null $ReplicationFactor
 * @property int|null $PartitionCount
 * @property int|null $OutOfSyncReplicaCount
 */
class TopicInfo extends Shape
{
    /**
     * @param array{
     *     TopicArn?: string|null,
     *     TopicName?: string|null,
     *     ReplicationFactor?: int|null,
     *     PartitionCount?: int|null,
     *     OutOfSyncReplicaCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
