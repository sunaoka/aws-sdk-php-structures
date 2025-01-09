<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $StaticValue
 * @property string $Parameter
 */
class NumericRangeFilterValue extends Shape
{
    /**
     * @param array{
     *     StaticValue?: double,
     *     Parameter?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
