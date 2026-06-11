<?php

namespace Sunaoka\Aws\Structures\EKS\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'host'|'rack'|null $spreadLevel
 */
class EtcdPlacementRequest extends Shape
{
    /**
     * @param array{spreadLevel?: 'host'|'rack'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
