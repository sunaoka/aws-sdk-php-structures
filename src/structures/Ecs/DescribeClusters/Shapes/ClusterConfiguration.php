<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExecuteCommandConfiguration|null $executeCommandConfiguration
 */
class ClusterConfiguration extends Shape
{
    /**
     * @param array{executeCommandConfiguration?: ExecuteCommandConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
