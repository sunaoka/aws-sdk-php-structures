<?php

namespace Sunaoka\Aws\Structures\Kinesis\ListShards\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ShardId
 * @property string|null $ParentShardId
 * @property string|null $AdjacentParentShardId
 * @property HashKeyRange $HashKeyRange
 * @property SequenceNumberRange $SequenceNumberRange
 */
class Shard extends Shape
{
    /**
     * @param array{
     *     ShardId: string,
     *     ParentShardId?: string|null,
     *     AdjacentParentShardId?: string|null,
     *     HashKeyRange: HashKeyRange,
     *     SequenceNumberRange: SequenceNumberRange
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
