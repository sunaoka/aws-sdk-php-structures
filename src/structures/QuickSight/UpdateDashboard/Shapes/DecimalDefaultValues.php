<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DynamicDefaultValue $DynamicValue
 * @property list<double> $StaticValues
 */
class DecimalDefaultValues extends Shape
{
    /**
     * @param array{
     *     DynamicValue?: DynamicDefaultValue,
     *     StaticValues?: list<double>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
