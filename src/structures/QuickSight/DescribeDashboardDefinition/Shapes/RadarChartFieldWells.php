<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RadarChartAggregatedFieldWells|null $RadarChartAggregatedFieldWells
 */
class RadarChartFieldWells extends Shape
{
    /**
     * @param array{RadarChartAggregatedFieldWells?: RadarChartAggregatedFieldWells|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
