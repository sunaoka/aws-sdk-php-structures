<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $StringStaticValues
 * @property list<double>|null $DecimalStaticValues
 * @property list<\Aws\Api\DateTimeResult>|null $DateTimeStaticValues
 * @property list<int>|null $IntegerStaticValues
 */
class NewDefaultValues extends Shape
{
    /**
     * @param array{
     *     StringStaticValues?: list<string>|null,
     *     DecimalStaticValues?: list<double>|null,
     *     DateTimeStaticValues?: list<\Aws\Api\DateTimeResult>|null,
     *     IntegerStaticValues?: list<int>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
