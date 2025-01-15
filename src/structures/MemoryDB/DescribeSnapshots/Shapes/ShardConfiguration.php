<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeSnapshots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Slots
 * @property int|null $ReplicaCount
 */
class ShardConfiguration extends Shape
{
    /**
     * @param array{
     *     Slots?: string|null,
     *     ReplicaCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
