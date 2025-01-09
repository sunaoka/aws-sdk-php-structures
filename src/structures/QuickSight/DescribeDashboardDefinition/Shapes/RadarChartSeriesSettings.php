<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RadarChartAreaStyleSettings $AreaStyleSettings
 */
class RadarChartSeriesSettings extends Shape
{
    /**
     * @param array{AreaStyleSettings?: RadarChartAreaStyleSettings} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
