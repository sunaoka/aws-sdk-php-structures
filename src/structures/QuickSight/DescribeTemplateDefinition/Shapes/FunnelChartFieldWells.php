<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FunnelChartAggregatedFieldWells $FunnelChartAggregatedFieldWells
 */
class FunnelChartFieldWells extends Shape
{
    /**
     * @param array{FunnelChartAggregatedFieldWells?: FunnelChartAggregatedFieldWells} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
