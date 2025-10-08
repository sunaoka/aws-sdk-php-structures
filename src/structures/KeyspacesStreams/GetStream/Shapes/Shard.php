<?php

namespace Sunaoka\Aws\Structures\KeyspacesStreams\GetStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $shardId
 * @property SequenceNumberRange|null $sequenceNumberRange
 * @property list<string>|null $parentShardIds
 */
class Shard extends Shape
{
    /**
     * @param array{
     *     shardId?: string|null,
     *     sequenceNumberRange?: SequenceNumberRange|null,
     *     parentShardIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
