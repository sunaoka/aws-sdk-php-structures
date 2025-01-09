<?php

namespace Sunaoka\Aws\Structures\EKS\RegisterCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OIDC $oidc
 */
class Identity extends Shape
{
    /**
     * @param array{oidc?: OIDC} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
