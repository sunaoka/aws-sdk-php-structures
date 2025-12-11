<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataPrepSimpleAggregationFunction|null $SimpleAggregation
 * @property DataPrepListAggregationFunction|null $ListAggregation
 */
class DataPrepAggregationFunction extends Shape
{
    /**
     * @param array{
     *     SimpleAggregation?: DataPrepSimpleAggregationFunction|null,
     *     ListAggregation?: DataPrepListAggregationFunction|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
