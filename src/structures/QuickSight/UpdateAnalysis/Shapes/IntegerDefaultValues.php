<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DynamicDefaultValue|null $DynamicValue
 * @property list<int>|null $StaticValues
 */
class IntegerDefaultValues extends Shape
{
    /**
     * @param array{
     *     DynamicValue?: DynamicDefaultValue|null,
     *     StaticValues?: list<int>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
