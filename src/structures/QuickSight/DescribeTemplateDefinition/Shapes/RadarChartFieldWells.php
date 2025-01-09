<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RadarChartAggregatedFieldWells $RadarChartAggregatedFieldWells
 */
class RadarChartFieldWells extends Shape
{
    /**
     * @param array{RadarChartAggregatedFieldWells?: RadarChartAggregatedFieldWells} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
