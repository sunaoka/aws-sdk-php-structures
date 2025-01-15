<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEFAULT'|'SUM'|'AVERAGE'|'MIN'|'MAX'|'NONE'|null $SimpleTotalAggregationFunction
 */
class TotalAggregationFunction extends Shape
{
    /**
     * @param array{SimpleTotalAggregationFunction?: 'DEFAULT'|'SUM'|'AVERAGE'|'MIN'|'MAX'|'NONE'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
