<?php

namespace Sunaoka\Aws\Structures\DynamoDbStreams\DescribeStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ShardId
 * @property SequenceNumberRange $SequenceNumberRange
 * @property string $ParentShardId
 */
class Shard extends Shape
{
    /**
     * @param array{
     *     ShardId?: string,
     *     SequenceNumberRange?: SequenceNumberRange,
     *     ParentShardId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
