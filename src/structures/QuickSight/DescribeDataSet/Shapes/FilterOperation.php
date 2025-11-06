<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConditionExpression
 * @property DataSetStringFilterCondition|null $StringFilterCondition
 * @property DataSetNumericFilterCondition|null $NumericFilterCondition
 * @property DataSetDateFilterCondition|null $DateFilterCondition
 */
class FilterOperation extends Shape
{
    /**
     * @param array{
     *     ConditionExpression?: string|null,
     *     StringFilterCondition?: DataSetStringFilterCondition|null,
     *     NumericFilterCondition?: DataSetNumericFilterCondition|null,
     *     DateFilterCondition?: DataSetDateFilterCondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
