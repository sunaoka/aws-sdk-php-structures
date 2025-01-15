<?php

namespace Sunaoka\Aws\Structures\EKS\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OIDC|null $oidc
 */
class Identity extends Shape
{
    /**
     * @param array{oidc?: OIDC|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
