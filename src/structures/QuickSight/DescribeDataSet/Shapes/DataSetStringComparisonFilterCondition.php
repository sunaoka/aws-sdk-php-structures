<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EQUALS'|'DOES_NOT_EQUAL'|'CONTAINS'|'DOES_NOT_CONTAIN'|'STARTS_WITH'|'ENDS_WITH' $Operator
 * @property DataSetStringFilterValue|null $Value
 */
class DataSetStringComparisonFilterCondition extends Shape
{
    /**
     * @param array{
     *     Operator: 'EQUALS'|'DOES_NOT_EQUAL'|'CONTAINS'|'DOES_NOT_CONTAIN'|'STARTS_WITH'|'ENDS_WITH',
     *     Value?: DataSetStringFilterValue|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
