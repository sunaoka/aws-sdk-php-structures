<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExecuteCommandConfiguration $executeCommandConfiguration
 * @property ManagedStorageConfiguration $managedStorageConfiguration
 */
class ClusterConfiguration extends Shape
{
    /**
     * @param array{
     *     executeCommandConfiguration?: ExecuteCommandConfiguration,
     *     managedStorageConfiguration?: ManagedStorageConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
