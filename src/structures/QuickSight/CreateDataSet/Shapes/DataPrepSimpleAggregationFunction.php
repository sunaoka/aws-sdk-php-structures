<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InputColumnName
 * @property 'COUNT'|'DISTINCT_COUNT'|'SUM'|'AVERAGE'|'MAX'|'MIN' $FunctionType
 */
class DataPrepSimpleAggregationFunction extends Shape
{
    /**
     * @param array{
     *     InputColumnName?: string|null,
     *     FunctionType: 'COUNT'|'DISTINCT_COUNT'|'SUM'|'AVERAGE'|'MAX'|'MIN'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
