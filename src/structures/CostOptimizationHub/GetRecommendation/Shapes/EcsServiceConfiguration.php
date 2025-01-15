<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ComputeConfiguration|null $compute
 */
class EcsServiceConfiguration extends Shape
{
    /**
     * @param array{compute?: ComputeConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
