<?php

namespace Sunaoka\Aws\Structures\Ecs\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $namespace
 */
class ClusterServiceConnectDefaults extends Shape
{
    /**
     * @param array{namespace?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
