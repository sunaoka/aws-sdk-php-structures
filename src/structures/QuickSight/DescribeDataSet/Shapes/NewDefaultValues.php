<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $StringStaticValues
 * @property list<double> $DecimalStaticValues
 * @property list<\Aws\Api\DateTimeResult> $DateTimeStaticValues
 * @property list<int> $IntegerStaticValues
 */
class NewDefaultValues extends Shape
{
    /**
     * @param array{
     *     StringStaticValues?: list<string>,
     *     DecimalStaticValues?: list<double>,
     *     DateTimeStaticValues?: list<\Aws\Api\DateTimeResult>,
     *     IntegerStaticValues?: list<int>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
