<?php

namespace Sunaoka\Aws\Structures\MemoryDB\UpdateMultiRegionCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $ShardCount
 */
class ShardConfigurationRequest extends Shape
{
    /**
     * @param array{ShardCount?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
