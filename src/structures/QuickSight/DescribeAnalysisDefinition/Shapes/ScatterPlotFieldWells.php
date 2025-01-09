<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ScatterPlotCategoricallyAggregatedFieldWells $ScatterPlotCategoricallyAggregatedFieldWells
 * @property ScatterPlotUnaggregatedFieldWells $ScatterPlotUnaggregatedFieldWells
 */
class ScatterPlotFieldWells extends Shape
{
    /**
     * @param array{
     *     ScatterPlotCategoricallyAggregatedFieldWells?: ScatterPlotCategoricallyAggregatedFieldWells,
     *     ScatterPlotUnaggregatedFieldWells?: ScatterPlotUnaggregatedFieldWells
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
