<?php

namespace Sunaoka\Aws\Structures\DynamoDbStreams\DescribeStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ShardId
 * @property SequenceNumberRange|null $SequenceNumberRange
 * @property string|null $ParentShardId
 */
class Shard extends Shape
{
    /**
     * @param array{
     *     ShardId?: string|null,
     *     SequenceNumberRange?: SequenceNumberRange|null,
     *     ParentShardId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
