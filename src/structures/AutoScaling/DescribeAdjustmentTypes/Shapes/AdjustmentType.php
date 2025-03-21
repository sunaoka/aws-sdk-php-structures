<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeAdjustmentTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AdjustmentType
 */
class AdjustmentType extends Shape
{
    /**
     * @param array{AdjustmentType?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
