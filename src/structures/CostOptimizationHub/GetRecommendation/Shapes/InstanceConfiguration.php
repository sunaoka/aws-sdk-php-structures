<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $type
 */
class InstanceConfiguration extends Shape
{
    /**
     * @param array{type?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
