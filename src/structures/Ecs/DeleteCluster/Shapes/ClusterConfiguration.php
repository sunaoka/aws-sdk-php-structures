<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExecuteCommandConfiguration|null $executeCommandConfiguration
 * @property ManagedStorageConfiguration|null $managedStorageConfiguration
 */
class ClusterConfiguration extends Shape
{
    /**
     * @param array{
     *     executeCommandConfiguration?: ExecuteCommandConfiguration|null,
     *     managedStorageConfiguration?: ManagedStorageConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
