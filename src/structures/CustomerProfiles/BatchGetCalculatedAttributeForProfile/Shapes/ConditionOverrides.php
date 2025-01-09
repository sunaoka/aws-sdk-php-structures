<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\BatchGetCalculatedAttributeForProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RangeOverride $Range
 */
class ConditionOverrides extends Shape
{
    /**
     * @param array{Range?: RangeOverride} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
