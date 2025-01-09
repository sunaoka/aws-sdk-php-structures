<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PRIMARY_YAXIS'|'SECONDARY_YAXIS' $AxisBinding
 * @property LineChartLineStyleSettings $LineStyleSettings
 * @property LineChartMarkerStyleSettings $MarkerStyleSettings
 */
class LineChartDefaultSeriesSettings extends Shape
{
    /**
     * @param array{
     *     AxisBinding?: 'PRIMARY_YAXIS'|'SECONDARY_YAXIS',
     *     LineStyleSettings?: LineChartLineStyleSettings,
     *     MarkerStyleSettings?: LineChartMarkerStyleSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
