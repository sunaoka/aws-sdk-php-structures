<?php

namespace Sunaoka\Aws\Structures\Ecs\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $namespace
 */
class ClusterServiceConnectDefaultsRequest extends Shape
{
    /**
     * @param array{namespace: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
