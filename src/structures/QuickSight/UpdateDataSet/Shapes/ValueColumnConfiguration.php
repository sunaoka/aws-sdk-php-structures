<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataPrepAggregationFunction|null $AggregationFunction
 */
class ValueColumnConfiguration extends Shape
{
    /**
     * @param array{AggregationFunction?: DataPrepAggregationFunction|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
