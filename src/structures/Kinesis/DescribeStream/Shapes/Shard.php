<?php

namespace Sunaoka\Aws\Structures\Kinesis\DescribeStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ShardId
 * @property string $ParentShardId
 * @property string $AdjacentParentShardId
 * @property HashKeyRange $HashKeyRange
 * @property SequenceNumberRange $SequenceNumberRange
 */
class Shard extends Shape
{
    /**
     * @param array{
     *     ShardId: string,
     *     ParentShardId?: string,
     *     AdjacentParentShardId?: string,
     *     HashKeyRange: HashKeyRange,
     *     SequenceNumberRange: SequenceNumberRange
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
