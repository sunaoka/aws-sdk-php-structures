<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $StaticValue
 * @property string|null $Parameter
 */
class NumericRangeFilterValue extends Shape
{
    /**
     * @param array{
     *     StaticValue?: double|null,
     *     Parameter?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
