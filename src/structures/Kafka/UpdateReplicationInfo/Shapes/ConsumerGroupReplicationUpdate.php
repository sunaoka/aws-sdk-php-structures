<?php

namespace Sunaoka\Aws\Structures\Kafka\UpdateReplicationInfo\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $ConsumerGroupsToExclude
 * @property list<string> $ConsumerGroupsToReplicate
 * @property bool $DetectAndCopyNewConsumerGroups
 * @property bool $SynchroniseConsumerGroupOffsets
 */
class ConsumerGroupReplicationUpdate extends Shape
{
    /**
     * @param array{
     *     ConsumerGroupsToExclude: list<string>,
     *     ConsumerGroupsToReplicate: list<string>,
     *     DetectAndCopyNewConsumerGroups: bool,
     *     SynchroniseConsumerGroupOffsets: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
