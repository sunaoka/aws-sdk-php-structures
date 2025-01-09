<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $StringValues
 * @property list<int> $IntegerValues
 * @property list<double> $DecimalValues
 * @property list<\Aws\Api\DateTimeResult> $DateTimeValues
 */
class CustomParameterValues extends Shape
{
    /**
     * @param array{
     *     StringValues?: list<string>,
     *     IntegerValues?: list<int>,
     *     DecimalValues?: list<double>,
     *     DateTimeValues?: list<\Aws\Api\DateTimeResult>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
