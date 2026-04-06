<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeCapacityProviders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $scaleInAfter
 */
class InfrastructureOptimization extends Shape
{
    /**
     * @param array{scaleInAfter?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
