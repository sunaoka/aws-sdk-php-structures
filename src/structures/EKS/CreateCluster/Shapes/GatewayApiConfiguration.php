<?php

namespace Sunaoka\Aws\Structures\EKS\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CrdManagementConfiguration|null $crds
 */
class GatewayApiConfiguration extends Shape
{
    /**
     * @param array{crds?: CrdManagementConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
