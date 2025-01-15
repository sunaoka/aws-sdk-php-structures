<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DynamicDefaultValue|null $DynamicValue
 * @property list<double>|null $StaticValues
 */
class DecimalDefaultValues extends Shape
{
    /**
     * @param array{
     *     DynamicValue?: DynamicDefaultValue|null,
     *     StaticValues?: list<double>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
