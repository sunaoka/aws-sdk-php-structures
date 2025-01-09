<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ComputeConfiguration $compute
 */
class EcsServiceConfiguration extends Shape
{
    /**
     * @param array{compute?: ComputeConfiguration} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
