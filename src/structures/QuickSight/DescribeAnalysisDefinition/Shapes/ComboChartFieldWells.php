<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ComboChartAggregatedFieldWells|null $ComboChartAggregatedFieldWells
 */
class ComboChartFieldWells extends Shape
{
    /**
     * @param array{ComboChartAggregatedFieldWells?: ComboChartAggregatedFieldWells|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
