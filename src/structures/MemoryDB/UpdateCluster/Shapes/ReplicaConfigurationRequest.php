<?php

namespace Sunaoka\Aws\Structures\MemoryDB\UpdateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ReplicaCount
 */
class ReplicaConfigurationRequest extends Shape
{
    /**
     * @param array{ReplicaCount?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
