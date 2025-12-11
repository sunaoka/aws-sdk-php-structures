<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataPrepAggregationFunction $AggregationFunction
 * @property string $NewColumnName
 * @property string $NewColumnId
 */
class Aggregation extends Shape
{
    /**
     * @param array{
     *     AggregationFunction: DataPrepAggregationFunction,
     *     NewColumnName: string,
     *     NewColumnId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
