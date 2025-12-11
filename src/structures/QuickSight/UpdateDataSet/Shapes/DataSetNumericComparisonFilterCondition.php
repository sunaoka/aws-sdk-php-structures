<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EQUALS'|'DOES_NOT_EQUAL'|'GREATER_THAN'|'GREATER_THAN_OR_EQUALS_TO'|'LESS_THAN'|'LESS_THAN_OR_EQUALS_TO' $Operator
 * @property DataSetNumericFilterValue|null $Value
 */
class DataSetNumericComparisonFilterCondition extends Shape
{
    /**
     * @param array{
     *     Operator: 'EQUALS'|'DOES_NOT_EQUAL'|'GREATER_THAN'|'GREATER_THAN_OR_EQUALS_TO'|'LESS_THAN'|'LESS_THAN_OR_EQUALS_TO',
     *     Value?: DataSetNumericFilterValue|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
