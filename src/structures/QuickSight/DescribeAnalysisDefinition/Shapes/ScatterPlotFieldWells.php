<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ScatterPlotCategoricallyAggregatedFieldWells|null $ScatterPlotCategoricallyAggregatedFieldWells
 * @property ScatterPlotUnaggregatedFieldWells|null $ScatterPlotUnaggregatedFieldWells
 */
class ScatterPlotFieldWells extends Shape
{
    /**
     * @param array{
     *     ScatterPlotCategoricallyAggregatedFieldWells?: ScatterPlotCategoricallyAggregatedFieldWells|null,
     *     ScatterPlotUnaggregatedFieldWells?: ScatterPlotUnaggregatedFieldWells|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
