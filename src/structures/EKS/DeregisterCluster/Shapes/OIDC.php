<?php

namespace Sunaoka\Aws\Structures\EKS\DeregisterCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $issuer
 */
class OIDC extends Shape
{
    /**
     * @param array{issuer?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
