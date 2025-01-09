<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BarChartAggregatedFieldWells $BarChartAggregatedFieldWells
 */
class BarChartFieldWells extends Shape
{
    /**
     * @param array{BarChartAggregatedFieldWells?: BarChartAggregatedFieldWells} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
