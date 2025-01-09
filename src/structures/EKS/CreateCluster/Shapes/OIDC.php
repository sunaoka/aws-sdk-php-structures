<?php

namespace Sunaoka\Aws\Structures\EKS\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $issuer
 */
class OIDC extends Shape
{
    /**
     * @param array{issuer?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
