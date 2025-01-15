<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $StringValues
 * @property list<int>|null $IntegerValues
 * @property list<double>|null $DecimalValues
 * @property list<\Aws\Api\DateTimeResult>|null $DateTimeValues
 */
class CustomParameterValues extends Shape
{
    /**
     * @param array{
     *     StringValues?: list<string>|null,
     *     IntegerValues?: list<int>|null,
     *     DecimalValues?: list<double>|null,
     *     DateTimeValues?: list<\Aws\Api\DateTimeResult>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
