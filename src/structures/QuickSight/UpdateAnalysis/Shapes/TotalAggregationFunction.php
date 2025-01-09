<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEFAULT'|'SUM'|'AVERAGE'|'MIN'|'MAX'|'NONE' $SimpleTotalAggregationFunction
 */
class TotalAggregationFunction extends Shape
{
    /**
     * @param array{SimpleTotalAggregationFunction?: 'DEFAULT'|'SUM'|'AVERAGE'|'MIN'|'MAX'|'NONE'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
