<?php

namespace Sunaoka\Aws\Structures\MemoryDB\UpdateMultiRegionCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ShardCount
 */
class ShardConfigurationRequest extends Shape
{
    /**
     * @param array{ShardCount?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
