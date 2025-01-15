<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RadarChartAreaStyleSettings|null $AreaStyleSettings
 */
class RadarChartSeriesSettings extends Shape
{
    /**
     * @param array{AreaStyleSettings?: RadarChartAreaStyleSettings|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
