<?php

namespace Sunaoka\Aws\Structures\DynamoDbStreams\DescribeStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CHILD_SHARDS'|null $Type
 * @property string|null $ShardId
 */
class ShardFilter extends Shape
{
    /**
     * @param array{
     *     Type?: 'CHILD_SHARDS'|null,
     *     ShardId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
