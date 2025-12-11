<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeTopicPartitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $Partition
 * @property int|null $Leader
 * @property list<int>|null $Replicas
 * @property list<int>|null $Isr
 */
class TopicPartitionInfo extends Shape
{
    /**
     * @param array{
     *     Partition?: int|null,
     *     Leader?: int|null,
     *     Replicas?: list<int>|null,
     *     Isr?: list<int>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
