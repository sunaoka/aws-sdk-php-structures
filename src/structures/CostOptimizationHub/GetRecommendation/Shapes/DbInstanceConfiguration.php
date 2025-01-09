<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $dbInstanceClass
 */
class DbInstanceConfiguration extends Shape
{
    /**
     * @param array{dbInstanceClass?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
