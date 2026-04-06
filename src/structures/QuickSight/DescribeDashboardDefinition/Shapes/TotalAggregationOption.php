<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldId
 * @property TotalAggregationFunction $TotalAggregationFunction
 */
class TotalAggregationOption extends Shape
{
    /**
     * @param array{
     *     FieldId: string,
     *     TotalAggregationFunction: TotalAggregationFunction
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
