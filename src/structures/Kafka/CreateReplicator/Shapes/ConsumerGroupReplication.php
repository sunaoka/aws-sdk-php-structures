<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateReplicator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $ConsumerGroupsToExclude
 * @property list<string> $ConsumerGroupsToReplicate
 * @property bool|null $DetectAndCopyNewConsumerGroups
 * @property bool|null $SynchroniseConsumerGroupOffsets
 */
class ConsumerGroupReplication extends Shape
{
    /**
     * @param array{
     *     ConsumerGroupsToExclude?: list<string>|null,
     *     ConsumerGroupsToReplicate: list<string>,
     *     DetectAndCopyNewConsumerGroups?: bool|null,
     *     SynchroniseConsumerGroupOffsets?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
