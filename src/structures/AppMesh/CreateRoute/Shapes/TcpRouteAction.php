<?php

namespace Sunaoka\Aws\Structures\AppMesh\CreateRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<WeightedTarget> $weightedTargets
 */
class TcpRouteAction extends Shape
{
    /**
     * @param array{weightedTargets: list<WeightedTarget>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
