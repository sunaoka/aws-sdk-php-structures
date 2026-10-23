<?php

namespace Sunaoka\Aws\Structures\Continuum\UpdateCollector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KubernetesClusterRoleConfiguration|null $set
 * @property RemoveKubernetesClusterRole|null $remove
 */
class KubernetesClusterRoleUpdate extends Shape
{
    /**
     * @param array{
     *     set?: KubernetesClusterRoleConfiguration|null,
     *     remove?: RemoveKubernetesClusterRole|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
