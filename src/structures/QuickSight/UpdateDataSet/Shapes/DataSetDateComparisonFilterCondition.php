<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BEFORE'|'BEFORE_OR_EQUALS_TO'|'AFTER'|'AFTER_OR_EQUALS_TO' $Operator
 * @property DataSetDateFilterValue|null $Value
 */
class DataSetDateComparisonFilterCondition extends Shape
{
    /**
     * @param array{
     *     Operator: 'BEFORE'|'BEFORE_OR_EQUALS_TO'|'AFTER'|'AFTER_OR_EQUALS_TO',
     *     Value?: DataSetDateFilterValue|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
