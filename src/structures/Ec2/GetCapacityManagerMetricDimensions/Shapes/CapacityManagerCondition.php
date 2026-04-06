<?php

namespace Sunaoka\Aws\Structures\Ec2\GetCapacityManagerMetricDimensions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DimensionCondition|null $DimensionCondition
 */
class CapacityManagerCondition extends Shape
{
    /**
     * @param array{DimensionCondition?: DimensionCondition|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
