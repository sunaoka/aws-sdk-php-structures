<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DeleteSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Slots
 * @property int $ReplicaCount
 */
class ShardConfiguration extends Shape
{
    /**
     * @param array{
     *     Slots?: string,
     *     ReplicaCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
