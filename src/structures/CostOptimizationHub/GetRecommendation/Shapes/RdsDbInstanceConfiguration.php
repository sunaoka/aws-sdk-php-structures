<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DbInstanceConfiguration|null $instance
 */
class RdsDbInstanceConfiguration extends Shape
{
    /**
     * @param array{instance?: DbInstanceConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
