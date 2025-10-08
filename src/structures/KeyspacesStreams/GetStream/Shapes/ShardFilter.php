<?php

namespace Sunaoka\Aws\Structures\KeyspacesStreams\GetStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CHILD_SHARDS'|null $type
 * @property string|null $shardId
 */
class ShardFilter extends Shape
{
    /**
     * @param array{
     *     type?: 'CHILD_SHARDS'|null,
     *     shardId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
