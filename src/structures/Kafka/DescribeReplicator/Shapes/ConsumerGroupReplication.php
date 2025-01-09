<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeReplicator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $ConsumerGroupsToExclude
 * @property list<string> $ConsumerGroupsToReplicate
 * @property bool $DetectAndCopyNewConsumerGroups
 * @property bool $SynchroniseConsumerGroupOffsets
 */
class ConsumerGroupReplication extends Shape
{
    /**
     * @param array{
     *     ConsumerGroupsToExclude?: list<string>,
     *     ConsumerGroupsToReplicate: list<string>,
     *     DetectAndCopyNewConsumerGroups?: bool,
     *     SynchroniseConsumerGroupOffsets?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
