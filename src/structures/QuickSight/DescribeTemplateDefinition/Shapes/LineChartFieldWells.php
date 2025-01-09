<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LineChartAggregatedFieldWells $LineChartAggregatedFieldWells
 */
class LineChartFieldWells extends Shape
{
    /**
     * @param array{LineChartAggregatedFieldWells?: LineChartAggregatedFieldWells} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
